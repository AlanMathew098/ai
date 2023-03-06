<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <a class="nav-link " href="./documentation.php"  style="color: green;" >Documentation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">Examples</a>
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
        <div class="container my-5">
            <h4 class="text-center ">Examples</h4>
            <p class="text-center">Explore what's possible with some example applications</p>
        </div>
    </section>
 
 
      <section>
        <div class="container img-fluid ">
          <div class="row ">
            <div class="col-md-4 offset-md-3 "> <form>
              <input class="form-control   " type="search" placeholder="Search..." aria-label="Search">
            
            </form></div>
            <div class="col-md-4 flot ">  <select class="select form-control bg-transparent rounded-3 w-75  " data-mdb-filter="true">
              <option value="1">All Categories</option>
              <option value="2">Answers</option>
              <option value="3">Classificaton</option>
              <option value="4">Code</option>
              <option value="5">Conversation</option>
              <option value="6">Generation</option>
              <option value="7">Translation</option>
              <option value="8">Transformation</option>
             
            </select></div>
           
          </div>
        </div>
      </section>

      <section class="my-4" >
        <div class="container">
         <div class="row">
           <div class="col-md-4 offset-md-3">
             <span class="icon2"><i class="bi bi-patch-question"></i>
                </span>
             <div class="content">
               <h5>Q&A</h5>
               <p>Answer questions based on existing knowledge.</p>
              
             </div>
           </div>
          
           <div class="col-md-4 ">
             <span class="icon"><i class="bi bi-code-square"></i>
                </span>
             <div class="content2">
               <h5>Grammar correction</h5>
               <p>Learn how to generate or manipulate code</p>
               
             </div>
           </div>
         </div>

         <div class="row">
          <div class="col-md-4 offset-md-3">
            <span class="icon2"><i class="fa-solid fa-forward"></i>
               </span>
            <div class="content">
              <h5>Summarize for a 2nd grader</h5>
              <p>Translates difficult text into simpler concepts.</p>
             
            </div>
          </div>
         
          <div class="col-md-4 ">
            <span class="icon"><i class="bi bi-chat-square-text"></i>
               </span>
            <div class="content2">
              <h5>Natural language to Opacai API</h5>
              <p>Create code to call to the OacAI API using...</p>
              
            </div>
          </div>
        </div>

        
        <div class="row">
          <div class="col-md-4 offset-md-3">
            <span class="icon2"><i class="bi bi-terminal fa-1x"></i>
               </span>
            <div class="content">
              <h5>Text to command</h5>
              <p>Translate text into programmatic commands.</p>
             
            </div>
          </div>
         
          <div class="col-md-4 ">
            <span class="icon"><i class="bi bi-globe2"></i>
               </span>
            <div class="content2">
              <h5>English to other languages</h5>
              <p>Translates English text into French, Spanish...</p>
              
            </div>
          </div>
        </div>

        
        <div class="row">
          <div class="col-md-4 offset-md-3">
            <span class="icon2"><i class="fa-solid fa-dollar-sign"></i>
               </span>
            <div class="content">
              <h5>Natural language to Stripe API</h5>
              <p>Create code to call the Stripe API using natural..</p>
             
            </div>
          </div>
         
          <div class="col-md-4 ">
            <span class="icon"><i class="bi bi-question-circle-fill"></i>
               </span>
            <div class="content2">
              <h5>SQL translate</h5>
              <p>Translate natural language to SQL queries..</p>
              
            </div>
          </div>
        </div>



        <div class="row">
          <div class="col-md-4 offset-md-3">
            <span class="icon2"><i class="fa-solid fa-table-columns"></i>
               </span>
            <div class="content">
              <h5>Parse unstructured data</h5>
              <p>Create tables from long form text by specify..</p>
             
            </div>
          </div>
         
          <div class="col-md-4 ">
            <span class="icon"><i class="bi bi-tag-fill"></i>
               </span>
            <div class="content2">
              <h5>Classification</h5>
              <p>Classify items into categories via example.</p>
              
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 offset-md-3">
            <span class="icon2"><i class="fa-solid fa-hashtag"></i>
               </span>
            <div class="content">
              <h5>Python to natural language</h5>
              <p>Explain a piece of Python code in human</p>
             
            </div>
          </div>
         
          <div class="col-md-4 ">
            <span class="icon"><i class="fa-solid fa-face-smile"></i>
               </span>
            <div class="content2">
              <h5>Movie to Emoji</h5>
              <p>Convert movie titles into emoji.</p>
              
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 offset-md-3">
            <span class="icon2"><i class="fa-solid fa-clock"></i>
               </span>
            <div class="content">
              <h5>Calculate Time Complexity</h5>
              <p>Find the time complexity of a function.</p>
             
            </div>
          </div>
         
          <div class="col-md-4 ">
            <span class="icon"><i class="fa-solid fa-earth-americas"></i>
               </span>
            <div class="content2">
              <h5>Translate programming languages</h5>
              <p>To translate from one programming language</p>
              
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 offset-md-3">
            <span class="icon2"><i class="fa-solid fa-hashtag"></i>
               </span>
            <div class="content">
              <h5>Advanced tweet classifier</h5>
              <p>This is an advanced prompt for detecting </p>
             
            </div>
          </div>
         
          <div class="col-md-4 ">
            <span class="icon"><i class="fa-solid fa-hashtag"></i>
               </span>
            <div class="content2">
              <h5>Explain code</h5>
              <p>Explain a complicated piece of code.</p>
              
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 offset-md-3">
            <span class="icon2"><i class="bi bi-key-fill"></i>
               </span>
            <div class="content">
              <h5>Keywords</h5>
              <p>Extract keywords from a block of text </p>
             
            </div>
          </div>
         
          <div class="col-md-4 ">
            <span class="icon"><i class="bi bi-question-circle-fill"></i>
               </span>
            <div class="content2">
              <h5>Factual answering</h5>
              <p>Guide the model towards factual answering .</p>
              
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 offset-md-3">
            <span class="icon2"><i class="fa-solid fa-bullhorn"></i>
               </span>
            <div class="content">
              <h5>Ad from product description</h5>
              <p>Turn a product description into ad copy </p>
             
            </div>
          </div>
         
          <div class="col-md-4 ">
            <span class="icon2"><i class="bi bi-lightbulb"></i>
               </span>
            <div class="content2">
              <h5>Product name generator</h5>
              <p>Create product names from examples words.</p>
              
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 offset-md-3">
            <span class="icon2"><i class="fa-solid fa-filter"></i>
               </span>
            <div class="content">
              <h5>TL;DR summarization</h5>
              <p>Summarize text by adding a 'tl;dr:' to the en </p>
             
            </div>
          </div>
         
          <div class="col-md-4 ">
            <span class="icon2"><i class="bi bi-bug-fill"></i>
               </span>
            <div class="content2">
              <h5>Python bug fixer</h5>
              <p>Find and fix bugs in source code.</p>
              
            </div>
          </div>
        </div>

        
        <div class="row">
          <div class="col-md-4 offset-md-3">
            <span class="icon2"><i class="fa-solid fa-table-columns"></i>
               </span>
            <div class="content">
              <h5>Spreadsheet creator</h5>
              <p>Create spreadsheets of various kinds of data </p>
             
            </div>
          </div>
         
          <div class="col-md-4 ">
            <span class="icon2"><i class="bi bi-question-circle-fill"></i>
               </span>
            <div class="content2">
              <h5>JavaScript helper Opacai</h5>
              <p>This is a message-style chatbot that can</p>
              
            </div>
          </div>
        </div>

          
        <div class="row">
          <div class="col-md-4 offset-md-3">
            <span class="icon2"><i class="bi bi-question-circle-fill"></i>
               </span>
            <div class="content">
              <h5>ML/AI language model tutor</h5>
              <p>This is a QA-style chatbot that answer</p>
             
            </div>
          </div>
         
          <div class="col-md-4 ">
            <span class="icon2"><i class="bi bi-book-half"></i>
               </span>
            <div class="content2">
              <h5>Science fiction book list maker</h5>
              <p>This makes a list of science fiction</p>
              
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 offset-md-3">
            <span class="icon2"><i class="fa-solid fa-hashtag"></i>
               </span>
            <div class="content">
              <h5>Tweet classifier</h5>
              <p>This is a basic prompt for detecting sentiment.</p>
             
            </div>
          </div>
         
          <div class="col-md-4 ">
            <span class="icon2"><i class="bi bi-tag-fill"></i>
               </span>
            <div class="content2">
              <h5>Airport code extractor</h5>
              <p>A simple prompt for extracting airport codes from text.</p>
              
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 offset-md-3">
            <span class="icon2"><i class="bi bi-terminal fa-1x"></i>
               </span>
            <div class="content">
              <h5>SQL request</h5>
              <p>Create simple SQL queries.</p>
             
            </div>
          </div>
         
          <div class="col-md-4 ">
            <span class="icon2"><i class="bi bi-envelope"></i>
               </span>
            <div class="content2">
              <h5>Extract contact information</h5>
              <p>Extract contact information from a block of text.</p>
              
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 offset-md-3">
            <span class="icon2"><i class="bi bi-terminal fa-1x"></i>
               </span>
            <div class="content">
              <h5>JavaScript to Python</h5>
              <p>Convert simple JavaScript expressions into Python..</p>
             
            </div>
          </div>
         
          <div class="col-md-4 ">
            <span class="icon2"><i class="bi bi-chat-left-dots-fill"></i>
               </span>
            <div class="content2">
              <h5>Friend chat</h5>
              <p>Emulate a text message conversation.</p>
              
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 offset-md-3">
            <span class="icon2"><i class="fa-solid fa-face-smile"></i>
               </span>
            <div class="content">
              <h5>Mood to color</h5>
              <p>Turn a text description into a color.</p>
             
            </div>
          </div>
         
          <div class="col-md-4 ">
            <span class="icon2"><i class="fa-solid fa-code"></i>
               </span>
            <div class="content2">
              <h5>Write a Python docstring</h5>
              <p>An example of how to create a docstring</p>
              
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 offset-md-3">
            <span class="icon2"><i class="bi bi-lightbulb"></i>
               </span>
            <div class="content">
              <h5>Analogy maker</h5>
              <p>Create analogies. Modified from a community </p>
             
            </div>
          </div>
         
          <div class="col-md-4 ">
            <span class="icon2"><i class="bi bi-terminal fa-1x"></i>
               </span>
            <div class="content2">
              <h5>JavaScript one line function</h5>
              <p>Turn a JavaScript function into a one liner.</p>
              
            </div>
          </div>
        </div>

        
        <div class="row">
          <div class="col-md-4 offset-md-3">
            <span class="icon2"><i class="fa-solid fa-pen-to-square"></i>
               </span>
            <div class="content">
              <h5>Micro horror story creator</h5>
              <p>Creates two to three sentence short horro </p>
             
            </div>
          </div>
         
          <div class="col-md-4 ">
            <span class="icon2"><i class="fa-solid fa-pen-to-square"></i>
               </span>
            <div class="content2">
              <h5>Third-person converter</h5>
              <p>Converts first-person POV to the third-person.</p>
              
            </div>
          </div>
        </div>


           
        <div class="row">
          <div class="col-md-4 offset-md-3">
            <span class="icon2"><i class="fa-solid fa-pen-to-square"></i>
               </span>
            <div class="content">
              <h5>Notes to summary</h5>
              <p>Turn meeting notes into a summary. </p>
             
            </div>
          </div>
         
          <div class="col-md-4 ">
            <span class="icon2"><i class="bi bi-lightbulb"></i>
               </span>
            <div class="content2">
              <h5>VR fitness idea generator</h5>
              <p>Create ideas for fitness and virtual reality games.</p>
              
            </div>
          </div>
        </div>
              
        <div class="row">
          <div class="col-md-4 offset-md-3">
            <span class="icon2"><i class="bi bi-journal"></i>
               </span>
            <div class="content">
              <h5>Essay outline</h5>
              <p>Generate an outline for a research topic.</p>
             
            </div>
          </div>
         
          <div class="col-md-4 ">
            <span class="icon2"><i class="fa-solid fa-cake-candles"></i>
               </span>
            <div class="content2">
              <h5>Recipe creator (eat at your own risk)</h5>
              <p>Create a recipe from a list of ingredients.</p>
              
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 offset-md-3">
            <span class="icon2"><i class="bi bi-chat-left-dots-fill"></i>
               </span>
            <div class="content">
              <h5>Chat</h5>
              <p>Open ended conversation with an AI assistant.</p>
             
            </div>
          </div>
         
          <div class="col-md-4 ">
            <span class="icon2"><i class="bi bi-emoji-frown-fill"></i>
               </span>
            <div class="content2">
              <h5>Marv the sarcastic chat bot</h5>
              <p>Marv is a factual chatbot that is also sarcastic.</p>
              
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 offset-md-3">
            <span class="icon2"><i class="fa-solid fa-location-dot"></i>
               </span>
            <div class="content">
              <h5>Turn by turn directions</h5>
              <p>Convert natural language to turn-by-turn directions.</p>
             
            </div>
          </div>
         
          <div class="col-md-4 ">
            <span class="icon2"><i class="fa-solid fa-utensils"></i>
               </span>
            <div class="content2">
              <h5>Restaurant review creator</h5>
              <p>Turn a few words into a restaurant review..</p>
              
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 offset-md-3">
            <span class="icon2"><i class="bi bi-journal-text"></i>
               </span>
            <div class="content">
              <h5>Create study notes</h5>
              <p>Provide a topic and get study notes.</p>
             
            </div>
          </div>
         
          <div class="col-md-4 ">
            <span class="icon2"><i class="bi bi-briefcase"></i>
               </span>
            <div class="content2">
              <h5>Interview questions</h5>
              <p>Create interview questions.</p>
              
            </div>
          </div>
        </div>
       </div>
</section>   
      </body>
      </html>