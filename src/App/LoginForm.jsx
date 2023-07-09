import React, { useState, useEffect } from 'react'
import PropTypes from 'prop-types'



function Form({onConnect}){
 const  [errors, setErrors] = useState(null);
 const  [loading, setLoading] = useState(false);

  useEffect(() => {
      setErrors(null);
  }, []);

 const handleConnect = async (e) => {
     setErrors(null);
     setLoading(true);
      e.preventDefault();
      const data = new FormData(e.target);
         console.log(data);
         const response = await  fetch('https://e-api.ddev.site/api/login', {
           method: 'POST',
           body: data,
           headers: {
             'Accept': 'application/json',
           }
         }).then(async function(response){
          if(response.status === 404){
              setErrors('Email ou mot de passe incorrecte')
          }else if(response.status === 500){
              setErrors('Une erreur est survenue')
          }
        const respData =  await response.json();
        // store token in localstorage
        localStorage.setItem('token', respData.access_token);
        localStorage.setItem('user', JSON.stringify(respData.user));

         }).catch(function(error){
           console.log(error);
         }).finally(() => setLoading(false));


    }

  return(
   <div className='container mx-auto'>
   <form onSubmit={handleConnect}>
    {
      errors ?<AlertComponent message={errors}/> : null
    }
    <div className="mb-6">
      <label for="email" className="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre E-mail</label>
      <input type="email" id="email" name='email' className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required/>
    </div>
    <div className="mb-6">
      <label for="password" className="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de passe</label>
      <input type="password" id="password" name='password' className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required/>
    </div>
    <button disabled={loading} type="submit" className="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Se connecter</button>
  </form>
</div>
  );
}

export default function LoginForm() {
  return (
    <div className='mt-6'>
     <div>
       <h2 className='text-4xl font-bold text-center'>Veuillez vous connecter</h2>
     </div>
      <Form/>
    </div>
  )
}

function AlertComponent({message}){
  return(
    <div className="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-4 mb-2" role="alert">
      <span className="block sm:inline">{message}</span>
    </div>
  )
}

LoginForm.propTypes = {
 onConnect : PropTypes.func.isRequired
}
