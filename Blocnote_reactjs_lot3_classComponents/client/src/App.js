import { Routes, Route, Navigate } from 'react-router-dom';
import './css/style.css';
import HomePage from "./components/homePage/HomePage";
import PostPage from "./components/postPage/PostPage";
import AddPostPage from "./components/addPostPage/AddPostPage";

function App() {
  return (
    <>
      <Routes>
        <Route path="/" element={<HomePage />} />
        <Route path="/home" element={<Navigate replace to="/" />} />
        <Route path='/posts/:id' element={<PostPage />} />
        <Route path="/addpost" element={<AddPostPage />} />
      </Routes>
    </>

  );
}

export default App;
