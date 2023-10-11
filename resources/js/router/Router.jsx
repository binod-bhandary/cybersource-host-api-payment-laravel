import React from 'react'
import { Routes, Route } from 'react-router-dom'
import Index from '../components/Home/Index'
const Router = () => {
  return (
    <div>
        <Routes>
            <Route path="/" element={<Index />}/>
        </Routes>
    </div> 
  )
} 

export default Router