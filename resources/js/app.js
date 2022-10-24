import './bootstrap';

import Alpine from 'alpinejs';
import axios from 'axios';

window.Alpine = Alpine;

Alpine.start();

const channel = Echo.channel('public.chat.1')
// const form = document.getElementById('chat-form');
// const inputMessage = document.getElementById('input-message');

// const listMessage = document.getElementById('list-messages');

// form.addEventListener('submit', ()=>{
//     event.preventDefault()
//     const userInput = inputMessage.value;
//     axios.post('/chat-message', {
//         message: userInput,
//     });
// });


channel.subscribed(()=>{
    console.log('subscribed bang!');
}).listen('.chat-message',(event)=>{
    console.log(event);
    // const message = event.message;

    // const li = document.createElement('li');
    // li.textContent = message;
    // listMessage.append(li);
});
