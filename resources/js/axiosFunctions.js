import axios from 'axios';

let baseUrl = document.querySelector('meta[name="base-url"]').content;

async function axiosPost(url, data) {
  try {
    let newAxiosPost = await axios.post(`${baseUrl}${url}`, data);
    let response = await newAxiosPost.json();

    console.log(response);
  }catch(err) {
    console.error(err);
  }
}