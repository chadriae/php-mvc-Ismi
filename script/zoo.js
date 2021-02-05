var app = document.getElementById('app');

var typewriter = new Typewriter(app, {
  loop: false,
  delay: 75,
});

typewriter 

  .pauseFor(500)
  .typeString('<h1 style="color:#357EC7" font-family: "Roboto Mono" > Welcome!</h1> <br>')
  .pauseFor(300)
  .typeString('<h2 style="color:#6e6f93">Create your BeConnect Profile</h2><br>')
  .pauseFor(300)
  .typeString('<h2 style="color:#6e6f93 ">Share posts and get help from other developers</h2> <br>')
  .deleteChars(11)
  .typeString('<h2 class="dirk" style="color:#357EC7">BeConnect Code Monkeys</h2>') 
  .pauseFor(1000)
  .start();


  function myFunction() {
    var x = document.getElementById("myInput").form.id;
    document.getElementById("demo").innerHTML = x;
  }
  
