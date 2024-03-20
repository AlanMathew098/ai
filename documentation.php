<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opacai</title>
    <link rel="stylesheet" type="text/css" href="css/ai.css">
 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/regular.min.css" integrity="sha512-k2UAKyvfA7Xd/6FrOv5SG4Qr9h4p2oaeshXF99WO3zIpCsgTJ3YZELDK0gHdlJE5ls+Mbd5HL50b458z3meB/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/solid.min.css" integrity="sha512-6mc0R607di/biCutMUtU9K7NtNewiGQzrvWX4bWTeqmljZdJrwYvKJtnhgR+Ryvj+NRJ8+NnnCM/biGqMe/iRA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>


<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>
<body>
  
    <nav class="navbar navbar-expand-lg navbar-light sticky-top    shadow-0" style="background:radial-gradient(white,rgb(249, 249, 249)),whitesmoke;; " >
      
        <div class="container-fluid">
           
            <a class="navbar-brand " href="./ai.php"><span> <img src="./images/v612-mon.png" width="25px" alt="" ></span>Opac</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse " id="navbarNav">
           
            <ul class="navbar-nav   ">
          
                <li class="nav-item">
                    <a class="nav-link text-grey " href="./overview.php" tabindex="-1" aria-disabled="true">Overview</a>
                  </li>
              <li class="nav-item">
                <a class="nav-link " href=""  style="color: green;" >Documentation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="./examples.php">Examples</a>
              </li>
             
            </ul>
            <div class="navbar-nav ms-auto">
            
                <li class="nav-item ">
                  <a class="nav-link my-1 " style="text-decoration: none; color: #000;" href="./login.php">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="./sign in.php"><button type="button" class="btn btn-black h-25  shadow-0" style="border-radius: 63px;"  >Sign-up</button></a>
                </li>
    
              </div>
          </div>
        </div>
      </nav>
     <section>
      <div class="sidenav">
        
        <a href="#getstarted"><h6 style="color: #000;">Get Started</h6></a>
        <a href="#Overview">Overview</a>
        <a href="#Keyconcepts">Key concepts</a>
        <a href="#Nextsteps">Next steps</a>
        <a href="#Quickstarttutorial">Quickstart tutorial</a>
        <a href="#Libraries">Libraries</a>
        <a href="#Models">Models</a>
        <a href="#Usage policies">Usage policies</a>
        <br>
        <a href="#getstarted"><h6 style="color: #000;">Guide</h6></a>
        <a href="#Text completion">Text completion</a>
        <a href="#Code completion">Code completion</a>
        <a href="#Image generation">Image generation</a>
        <a href="#Fine-tuning">Fine-tuning</a>
        <a href="#Embeddings">Embeddings</a>
        <a href="#Moderation">Moderation</a>
        <a href="#Rate limits">Rate limits</a>
        <a href="#Safety best practices">Safety best practices</a>
        <a href="#Production Best Practices">Production Best Practices</a>
        <br>
        <a href="#API REFERENCE"><h6 style="color: #000;">API REFERENCE</h6></a>
        <a href="#Introduction">Introduction</a>
        <a href="#Authentication">Authentication</a>
        <a href="#Making requests">Making requests</a>
        <a href="#Models">Models</a>
        <a href="#Completions">Completions</a>
        <a href="#Edit's">Edit's</a>
        <a href="#Images">Images</a>
        <a href="#Models">Embedding's</a>
        <a href="#Files">Files</a>
        <a href="#Fine-Tunes">Fine-Tunes</a>
        <a href="#Moderation">Moderation</a>
        <a href="#Engine's">Engine's</a>
        <a href="#Parameter details">Parameter details
        </a>
        
        
      </div>
      
      <div class="main">
        <h2>Introduction</h2>
        <br>
        <h4 id="Overview" >Overview  </h4>
        <p class="col-md-10">The Opacai API can be applied to virtually any task that involves understanding or generating natural language or code. We offer a spectrum of models with different levels of power suitable for different tasks, as well as the ability to fine-tune your own custom models. These models can be used for everything from content generation to semantic search and classification.</p>
       
        <h4 id="Keyconcepts"> Key concepts</h4>
        <p>We recommend completing our quickstart tutorial to get acquainted with key concepts through a hands-on, interactive example.</p>
        <div class="container">
          <div class="row">
            <div class="col-md-5 ">
              <span class="icony"><i class="fa-solid fa-forward"></i>
                 </span>
              <div class="contenty">
                <h5>Quickstart tutorial</h5>
                <p>Learn by building a quick sample application
                </p>
               
              </div>
            </div>
          </div>
        </div>
        <br>
        <h4>Prompts and completions</h4>
       
        <p class="col-md-10">The<span style="color: rgb(50, 150, 50);"> completions</span> endpoint is at the center of our API. It provides a simple interface to our models that is extremely flexible and powerful. You input some text as a <span style="color:rgb(0, 0, 0);font-weight:bold">Prompt</span> and the model will generate a text <span style="color: #000;font-weight: bold;">completion</span> that attempts to match whatever context or pattern you gave it. For example, if you give the API the prompt, “Write a tagline for an ice cream shop”, it will return a completion like “We serve up smiles with every scoop!”</p>
        <p class="col-md-10"><span style="color: rgb(50, 150, 50);"> Designing your prompt </span> is essentially how you “program” the model, usually by providing some instructions or a few examples. This is different from most other NLP services which are designed for a single task, such as sentiment classification or named entity recognition. Instead, the completions endpoint can be used for virtually any task including content or code generation, summarization, expansion, conversation, creative writing, style transfer, and more.</p>
        <br>
        <h4>Tokens</h4>
      
        <p class="col-md-10">Our models understand and process text by breaking it down into tokens. Tokens can be words or just chunks of characters. For example, the word “hamburger” gets broken up into the tokens “ham”, “bur” and “ger”, while a short and common word like “pear” is a single token. Many tokens start with a whitespace, for example “ hello” and “ bye”.

        </p>

        <h4>Models</h4>
      
        <p class="col-md-10">The API is powered by a set of models with different capabilities and price points. Our base opac models are called Davinci, Curie, Babbage and Ada. Our Codex series is a descendant of Opacai that’s been trained on both natural language and code. To learn more, visit our.<span style="color: rgb(50, 150, 50);">models documentation.</span> </p>

        </p>
        <h4 id="Nextsteps">Next steps</h4>
        <ul>
        <li >Keep our<span style="color: rgb(50, 150, 50);"> in mind as you start building your application.</span> </li>
        <li >Explore our <span style="color: rgb(50, 150, 50);">  examples library</span> for inspiration.</li>
        <li>Jump into one of our guides to start building.</li>
        </ul>

        <h4>Guides</h4>
        
        <section >
          <div class="container">
           <div class="row">
             <div class="col-md-7 ">
               <span class="iconx"><i class="bi bi-pen"></i>
                  </span>
               <div class="contentx">
                 <h5>Text completion</h5>
                 <p>Learn how to generate or manipulate text</p>
                
               </div>
             </div>
            
             <div class="col-md-7 ">
               <span class="iconx"><i class="bi bi-code-square"></i>
                  </span>
               <div class="contentx">
                 <h5>Code completion</h5>
                 <p>Learn how to generate or manipulate code</p>
                 
               </div>
             </div>
           </div>
         </div>
     
     
         <div class="container">
           <div class="row">
             <div class="col-md-7">
               <span class="iconx"><i class="bi bi-image"></i>
                  </span>
               <div class="contentx">
                 <h5>Image generation</h5>
                 <p>Learn how to generate or manipulate images with our DALL·E models</p>
                
               </div>
             </div>
            
             <div class="col-md-7">
               <span class="iconx"><i class="bi bi-box"></i>
                  </span>
               <div class="contentx">
                 <h5>Fine Tuning</h5>
                 <p>Learn how to customize a model for your application.</p>
                 
               </div>
             </div>
           </div>
         </div>
     
     
         <div class="container">
           <div class="row"> 
             <div class="col-md-4 ">
               <span class="iconx"><i class="bi bi-map"></i>
                  </span>
               <div class="contentx">
                 <h5>Embeddings</h5>
                 <p>Learn how to generate or manipulate images with our DALL·E models</p>
                
               </div>
             </div>
           </div>
         </div>
        </div>

       

     </section>

      </body>
      </html>