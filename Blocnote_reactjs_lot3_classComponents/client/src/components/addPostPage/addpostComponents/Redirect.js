import React, { useEffect } from 'react'
import { useNavigate } from 'react-router-dom'

function Redirect() {
  const navigate = useNavigate();

  useEffect(() => {
    setTimeout(() => {
      navigate('/');
    }, 5000);
  }, [])
};
export default Redirect;