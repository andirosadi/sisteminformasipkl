import React, { useEffect, useState } from 'react';
import ReactDom from 'react-dom';
import "./bootstrap";
const useNotification = () =>{
  const [items, setItems] = useState([]);
  const onNext = () =>{};
  const disableNext = () => true;
  const fetch = () => {
    axios.get('/notification').then((response)=>{
      setItems([...response.data.data])
    })
  }

  useEffect(()=>{fetch();},[]);

  return [
    items, ()=>({ onNext, disableNext})
  ]
};

const Notification = ({message}) =>{
  const {header} = message;
  return <div className='card' style={{borderRadius : 20}}>
    <h4 className="font-weight-bolder card-header">
      {header}
    </h4>
    <div className="card-body px-3  p-0">
      <p>
        {message.message}
      </p>
    </div>
    <div className="card-footer">
      <small>{message.info}</small>
    </div>
  </div>
}

const NotificationContainer = () => {
  const [show, setShow] = useState(false);
  const [notifications, utils] = useNotification();
  useEffect(()=>{
    const clickCallback = () => {
      setShow(! show);
    }
    const sub = ()=>{
      const notificationbtn = document.getElementById('notification-icon');
      notificationbtn.addEventListener('click', clickCallback);
      return ()=> notificationbtn.removeEventListener('click', clickCallback)
    }
    const unsub = sub();
    return ()=>unsub();
  }, [show ])

  return(
    <div
      style={{zIndex:10*1000,backgroundColor:'rgba(0,0,0,0.5)', top : 0,  right : 0, width : show ? '100%' : 0, height:'100%'}}
         className="vh-100 justify-content-end d-flex flex-column vw-100 position-absolute">
      <div className={`ml-auto col-md-3 flex-grow-1 bg-inverse p-3 possition-relative ${!show ? 'd-none':''}`}>
        <button onClick={()=>setShow(!show)} className="btn btn-circle btn-danger position-absolute" style={{top : '1rem', right : '1rem'}}>
          <i className="fa fa-times"></i>
        </button>
        <h1 className='h1 text-white'>Notifikasi</h1>
        <hr/>
        <div className='hide-scrollbar' style={{maxHeight : '90vh', overflowY:'auto'}}>
          {notifications.map(({data, id})=><Notification key={id} {...data}/>)}
        </div>
      </div>
    </div>
  )
}

const notifikasicontainer = document.getElementById("notification-container");
if (notifikasicontainer) {
  const link = document.createElement('link');
  link.rel = "stylesheet";
  link.href = "/css/notifikasi.css";
  link.onload = function(){
    ReactDom.render(<NotificationContainer />, document.getElementById('notification-container'));
  }
  document.body.appendChild(link);
}