import  LoginForm  from './App/LoginForm';
import  React, { useState, useEffect } from 'react';
import apiFetch from './utils/api';
function App() {
  const [user, setUser] = useState(null);
  const [categories, setCategories] = useState([]);
  useEffect(() => {
      if(localStorage.getItem('user')){
          setUser(JSON.parse(localStorage.getItem('user')));
      }
      const response = apiFetch('/categories', {
          method: 'GET',
      });
      setCategories(response);
  }, [])
  return (
      user ? <div>
          <h1 className="text-2xl font-bold">Welcome {user.first_name}</h1>
         <p>Nous disposons de <span className="text-red-500 font-bold"> {categories.length} </span> </p>
      </div> : <LoginForm onConnected={setUser} />
  );
}
export default App;
