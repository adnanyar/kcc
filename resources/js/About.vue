<template>
    <div class="about-section" style="background:cornflowerblue">
  <h1>About Us </h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="./resources/30724908_986041414888001_6574779908591976448_o.png" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Adnan Yar</h2>
        <p class="title">Software Engineer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>Swen19211004@kfueit.edu.pk</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="./resources/30724908_986041414888001_6574779908591976448_o.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Salman Younus </h2>
        <p class="title">Software Engineer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>Swen19211008@kfueit.edu.pk</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="./resources/30724908_986041414888001_6574779908591976448_o.png" alt="John" style="width:100%">
      <div class="container">
        <h2>Dawood Nasir</h2>
        <p class="title">software Engineer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>Swen19211023@kfueit.edu.pk</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
</template>


<style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
    }
    
    html {
      box-sizing: border-box;
    }
    
    *, *:before, *:after {
      box-sizing: inherit;
    }
    
    .column {
      float: left;
      width: 33.3%;
      margin-bottom: 16px;
      padding: 0 8px;
    }
    
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      margin: 8px;
    }
    
    .about-section {
      padding: 50px;
      text-align: center;
      background-color: #474e5d;
      color: white;
    }
    
    .container {
      padding: 0 16px;
    }
    
    .container::after, .row::after {
      content: "";
      clear: both;
      display: table;
    }
    
    .title {
      color: grey;
    }
    
    .button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
    }
    
    .button:hover {
      background-color: #555;
    }
    
    @media screen and (max-width: 650px) {
      .column {
        width: 100%;
        display: block;
      }
    }
    </style>