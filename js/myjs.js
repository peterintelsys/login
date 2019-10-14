class Ui {

  // close all open that are normaly hidden
  // takes argument which collection
  static closeShow(mycollection){
        var i;
        for (i = 0; i < mycollection.length; i++){
    
            mycollection[i].classList.remove("show");
        }
    }


}


const company = 'Login system';

const name = document.querySelector('#companyname');

name.textContent = company;

const acc = document.querySelectorAll(".accordion");
const lists = document.querySelectorAll('li');
const panels = document.querySelectorAll(".panel");
const dropBtn = document.querySelectorAll(".drop-btn");
const drops = document.querySelectorAll(".dropdown");
const dropdowns = document.querySelectorAll(".dropdown-content");
const openD = document.querySelectorAll(".show");


window.addEventListener("click", function(e){

  
    if(!e.target.matches(".drop-btn") && !e.target.matches(".drop-item")){
      
       Ui.closeShow(dropdowns);
       
      }
});


dropBtn.forEach(showDrop);

function showDrop(drop) {
  drop.addEventListener("click", function(e){


    e.target.nextElementSibling.classList.toggle("show");

    
     
  });
}



acc.forEach(openAcc);

function openAcc(item){
  item.addEventListener("click", function(e) {

    var panel = e.target.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}



function openNav(a){
	
	if (a.style.display === 'block'){
  		a.style.display = 'none';
  	}else{
  		a.style.display = 'block';
  	}
 
}


lists.forEach(hoverColor);

function hoverColor(list){
  list.addEventListener('click', green);
  list.addEventListener('mouseover', grey);
  list.addEventListener('mouseout', white);

    function grey(){
    this.style.backgroundColor = '#f4f4f4';
  }
    function white(){
    this.style.backgroundColor = '#fff';
  }
    function green(){
    this.style.backgroundColor = '#d1e0b8';
  }
}

function hide(){
  this.style.display = 'none';
}


