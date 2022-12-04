// vue init
const {createApp} = Vue;

createApp({
    data(){
        return{
            // to do list data
            todoList: []
        }
    },
    created(){
        // axios call 
        axios
        
        // server php
            .get("server.php")
            .then( resp => {

                // to do list
                this.todoList = resp.data
            })
    }
}).mount("#app");