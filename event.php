<?php include('header.php');?>

<!DOCTYPE HTML>
<html>
<head>
<title>Events</title>
<style>
/**, *:before, *:after {
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}*/
/*body{
  background-color:#c9adab;
  font-size:19px;}
body, button, input {
  font-family: 'Montserrat', sans-serif;
  font-weight: 700;
  letter-spacing: 1.4px;
}*/
.event-container{
  display:flex;
  min-height:100vh;
  flex-direction:column;
  flex:1;
  margin-top:100px;
	padding:30px;	}
.event-heading{
  display: flex;
  flex-direction: column;
  position: relative;
  color:#0af712;
  font-size: 26px;
  padding-bottom:20px;}
  
 .event-heading:after {
  content: '';
  display: block;
  position: absolute;
  left: 0;
  bottom: -10px;
  width: 25px;
  height: 4px;
  background: #ea1d6f;
}
.event1{ 
  background-image:url("images/event1o.jpg");
  background-size:cover;
background-position:center;
flex: 1; 
border-radius:12px;
  padding: 50px;
  /*border:1px solid red;*/
margin-bottom:20px;}

  .event1.buttons{ 
     height:10px;margin-bottom: -30%;
border:none;
background-image:none;
 background-color:rgba(0,0,0,0.7);

  }
 .event2{
    background-image:url("images/event2.jpg");
    background-size:cover;
background-position:center;
flex: 1;
border-radius:12px;
  padding: 50px;
  /*border:1px solid red;*/
  margin-bottom:20px;}
  
  .event2.buttons{
    background-image:none; 
     height:100px;border:none;
  background-color:rgba(1,1,1,0.7);

  }
 .event3{ 
   background-image:url("images/event3.png");
   background-size:cover;
background-position:center;
flex: 1;
border-radius:12px;
  padding: 50px;
  /*border:1px solid red;*/
  margin-bottom:20px;}
  
  .event3.buttons{
    background-image:none; 
    border:none; 
    margin-bottom: 0;
  background-color:rgba(1,1,1,0.7);

  }
  
  .event4{
    background-image:url("images/event4o.jpg");
  background-size:cover;
background-position:center;
 flex: 1;
  border-radius:12px;
  padding: 50px;
  /*border:1px solid red;*/
  margin-bottom:20px;
  background-color:rgba(1,1,1,0.7);}
  
  .event4.buttons{
    background-image:none; border:none; 
  margin-bottom: 0;

  }
 .event-more{
   background-color:#dbc484;
 padding:10px;
		  border: none;
		  color: #faf9f7;
		  font-size: 16px;
		  cursor: pointer;
		  outline: none;float:left;
		  border-radius:15px;
		  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2)}
  
  .event-join{
    background-color:#dbc484;
  padding:10px;
			border: none;
		  color: #faf9f7;
		  font-size: 16px;
		  cursor: pointer;
		  outline: none;float:right;
box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);	
	  border-radius:15px;}
  
.event-more:hover{
  color: #b9134f;}

.event-join:hover{
  color:#b9134f;}

.event-title{
  padding-top:0px;display: flex;
  flex-direction: column;
  position: relative;
  color:#f0c107;
  font-size: 26px;
}
.event-title:after {
  content: '';
  display: block;
  position: absolute;
  left: 0;
  bottom: -10px;
  width: 25px;
  height: 4px;
  background: #ea1d6f;
}
.event-date{
  margin-top: auto;
  font-size: 15px;
  color: #b3b00c;
  text-decoration:none;
	}
</style>
</head>
<body>
<div class="event-container">
<div class="event-heading"><span>EVENTS</span><span>EDUCATION SANSAAR</span></div>
<div class="event1">
<div class="event-title"><h2><a>C-Programming-Basics</a></h2></div>
<div class="event-date">Date:12/12/2020 </div>
<div class="event1 buttons">
<button class="event-more">More detail>>></button>
<button class="event-join">I'll Join</button</div>
</div></div>
<div class="event2">
<div class="event-title"><h2>ROAD TO CODING</h2></div>
<div class="event-date" color=white>Date:12/12/2020 </div>
<div class="event2 buttons"><button class="event-more">More detail>>></button>
<button class="event-join">I'll Join</button></div>
</div>
<div class="event3">
<div class="event-title"><h2>BASICS OF JAVASCRIPT</h2></div>
<div class="event-date">Date:12/12/2020 </div>
<div class="event3 buttons"><button class="event-more">More detail>>></button>
<button class="event-join">I'll Join</button></div>
</div>
<div class="event4">
<div class="event-title"><h2>WHAT IS PROGRAMMING</h2>	</div>
<div class="event-date"> Date:12/12/2020</div>
<div class="event4 buttons"><button class="event-more">More detail>>></button>
<button class="event-join">I'll Join</button></div>
</div>
</div>
</body>
</html>
<?php include('footer.php');?>