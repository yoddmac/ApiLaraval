import React from "react";
import logo from "./logo.svg";
import { Login } from "./pages/login";
import { NotFound } from "./pages/NoPage";
import { Dashboard } from "./pages/dashboard";
import { Signin } from "./pages/signin";
import { Routes, Route } from "react-router-dom";
import "./App.css";

function App() {
  return (
    <>
      {/*
          This example requires updating your template:
  
          ```
          <html class="h-full bg-gray-50">
          <body class="h-full">
          ```
        */}

      <Routes>
        <Route path="/" element={<Login />} />
        <Route path="/dashboard" element={<Dashboard />} />
        <Route path="/signin" element={<Signin />} />
        <Route path="*" element={<NotFound />} />
      </Routes>
    </>
  );
}

export default App;
