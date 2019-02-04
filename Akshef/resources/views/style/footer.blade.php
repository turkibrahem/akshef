<style>





/*----------------------------------------------------------footer css-----------------------------------------------------------------*/


.footer-distributed{
	background-color: #16a3b5;
	box-shadow: 0 1px 1px 0 rgb(214, 214, 214);
	box-sizing: border-box;
  height: 10px;
	text-align: center;
	font: normal 11px sans-serif;
	font-weight: bold;
	font-family: Droid Sans Arabic;
	padding: 5px 50px 30px;
  margin: 0;
  width:auto !important;
}

.footer-distributed .footer-left p{
	color:  #8f9296;
	font-size: 14px;
	margin: 0;
	font-family: Droid Sans Arabic;
  padding:0 !important;
  margin: 0 !important;
  width:100% !important;

}

/* Footer links */

.footer-distributed p.footer-links{
	font-size:12px;
	font-weight: bold;
	color:  #ffffff;
	margin: -2px 0 8px;
	padding: 0;
	float: right;
	font-family: Droid Sans Arabic;

}

.footer-distributed p.footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
	font-family: Droid Sans Arabic;

}

.footer-distributed .footer-left{
	float: left;
	margin-left: 12px;
	max-width: 180px;
	font-family: Droid Sans Arabic;

}

.footer-distributed .footer-left a{
	display: inline-block;
	width: 35px;
	height: 35px;
	background-color:  #ebebeb ;
	border-radius: 2px;
	font-family: Droid Sans Arabic;
	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;
	margin-left: 3px;
}


#services{ background-color: #ebebeb;
}


#lists{ height: 280px;
        background-color: #13394c;
        color: #ffffff;
        padding: 0;
        margin: 0;
        direction: rtl;
        text-align: right;

        


}


#lists1{ direction: rtl;
         text-align: right;
         color: #ebebeb;
         margin-top: 20px;
        
        

         
         

}


#lists1 li a{ color: #ebebeb;
              text-decoration: none;

}

#lists1 li a:hover{ color: #febf01;
              

}





#point { color: #febf01;
    list-style: none;
    direction: rtl;
    font-size: 18px;
    font-weight: bold;

}

h5{ font-size: 13px;
    font-weight: bold;
}

.slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }







/*----------------------------------------------------------------social media icons css-------------------------------------------------------------------*/


.c-icon {
    width:  30px;
    height: 30px;
    fill: currentColor;
    transition: .2s;
    text-align: center;
    margin-top: 8px;
}

.c-link--facebook:hover  { color: #3b5998 }
.c-link--twitter:hover   { color: #55acee }
.c-link--google:hover    { color: #dd4b39 }
.c-link--pinterest:hover { color: #bd081c }
.c-link--instagram:hover { color: #833ab4 }
.c-link--facebook:hover::after  { background: #3b5998 }
.c-link--twitter:hover::after   { background: #55acee }
.c-link--google:hover::after    { background: #dd4b39 }
.c-link--pinterest:hover::after { background: #bd081c }
.c-link--instagram:hover::after { background: #833ab4 }

.c-link {  
    position: relative;
    color: #bbb;
    right: 1px;
}


.c-link:not(:last-of-type) {
    margin-right: -100px;
}


.c-tooltip::before,
.c-tooltip::after {
    display: block;
    position: absolute;
    left: 50%;
    transform: translate(-50%, -10px);
    opacity: 0;
    transition: .2s;
}

.c-tooltip::before {
    content: '';
    bottom: calc(100% + 2px);
    border: solid 5px transparent;
    border-top-color: currentColor;
}

.c-tooltip::after {
    content: attr(aria-label);
    bottom: calc(100% + 12px);
    padding: .61em .93em;
    font-size: .875rem;
    color: white;
    border-radius: 3px;
}

.c-tooltip:hover::before,
.c-tooltip:hover::after {
    opacity: 1;
    transform: translate(-50%);
}

.pens-link-container {
    flex-basis: 100%;
    font-size: .9rem;
    text-align: center;
}

.pens-link {
    margin-bottom: 0;
    background: white;
    box-shadow: 0 4px 18px rgba(0, 0, 0, .1);
    border: none;
}

#circle{ height: 45px;
         background-color: #ebebeb;
         text-align: center;
         margin: 0;
         padding: 0;
}



/*----------------------------------------------------------copyright---------------------------------------------------------------------*/

.copy{ margin-top: 5px;
  color: rgb(53, 53, 53);;
  font-size: 12px;
  cursor: pointer;
    
}


.copy:hover{ 
  color: #febf01;
  font-size: 14px;
  cursor: pointer;

}

@media screen and (max-width: 768px) {


#lists{ height: auto !important;
        background-color: #13394c;
        color: #ffffff;
        padding: 0;
        margin:0 ;
        direction: rtl;
        text-align: center;
     

        


}

#lists1{ margin-top: 20px !important;
         text-align: center !important;
         color: #ebebeb !important;
         margin-left: 50px !important; 

         
         

}

#lists , ul { list-style: none !important;
              

}






</style>