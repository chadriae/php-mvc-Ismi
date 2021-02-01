var app = document.getElementById('app');

var typewriter = new Typewriter(app, {
  loop: false,
  delay: 75,
});

typewriter 

  .pauseFor(500)
  .typeString('<h2 style="color:#357EC7" font-family: "Roboto Mono" > Welcome!</h2> <br>')
  .pauseFor(300)
  .typeString('<h2 style="color:#357EC7">Create your Beconnect Profile</h2><br>')
  .pauseFor(300)
  .typeString('<h2 style="color:#357EC7">Share posts and get help from other developers</h2>')
  .deleteChars(11)
  .typeString('<h1>Beconnect Code Monkeys</h1> ') 
  .pauseFor(1000)
  .start();
  
