import './bootstrap';
import '../css/app.css'; 
/* import react */
import React from 'react';
import ReactDOM from 'react-dom/client';
import { BrowserRouter } from 'react-router-dom';
import Router from './router/Router'

ReactDOM.createRoot(document.getElementById('app')).render (
    <BrowserRouter>
          <Router/>
    </BrowserRouter>   
) 