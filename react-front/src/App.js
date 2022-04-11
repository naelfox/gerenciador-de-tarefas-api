import './App.css';
import { useState, useEffect } from 'react';
import axios from "axios";


function App(){

  const [tasks, setTasks] = useState([])

  useEffect(()=>{
    async function getAllTasks(){
      try{
        const tasks = await axios.get("http://127.0.0.1:8000/api/task")
        console.log(tasks.data)
        setTasks(tasks.data)
      }catch(error){
        console.log(error)
      }
    }
    getAllTasks()

  }, [])
  return(
  

  <div className="App">
    <h1 className="title">Lista de Tarefas</h1>
    <hr></hr>
    {
      tasks.map((task)=>{
     
              return(
              <ul className="task-line" >
               <li className="task-title" >{task.title} </li> 
               <li className="task-description">"{task.description}" </li> 
               <li className="task-hour">Dia {task.date} Às {task.hour} horas</li> 
              </ul>          
        )
      })

    }
  </div>
  );
}




export default App;
