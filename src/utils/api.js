export default async function apiFetch(endpoint, options={}){
   const bearerToken = localStorage.getItem('token');
    const response =  await fetch('https://e-api.ddev.site/api'+endpoint, {
      headers: {
         'Authorization': `Bearer ${bearerToken}`,
         'Content-Type': 'application/json',
         'Accept': 'application/json'
      },
      ...options,
   })
   const data = await response.json();
   return data;
}
