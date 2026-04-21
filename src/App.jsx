import { Routes, Route } from 'react-router-dom'
import Store from './views/Store/index.jsx'
import Home from './views/Home/Home.jsx'

function App() {
  

  return (
    <Routes>
      <Route path='/' element={<Home />} /> 
      <Route path='/Store' element={<Store />} /> 
    </Routes>
  )
}

export default App;
