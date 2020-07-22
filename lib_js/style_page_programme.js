
//get all div about images 
let colmd4 = document.querySelectorAll('.element-item');

//get all popular buttons 
let allpopular = document.querySelectorAll('.popular');

// get all latest 
let alllatest = document.querySelector(".latest");

// get all following  
let allFollowing = document.querySelectorAll('.following');

// get all upcoming 
let allUpcoming = document.querySelectorAll('.upcoming');



// =================displaying only popular projects 

let BTNPopular = document.querySelector('.project-area .container .button-group #popular');
BTNPopular.addEventListener("click",(e)=>{
    e.preventDefault();
    for(let i=0;i<colmd4.length;i++){
        colmd4[i].style.display='block';
    }
    //hidding latest 
    alllatest.style.display='none';
    
    //hide following 
    for(let k=0;k<allFollowing.length;k++){
        allFollowing[k].style.display='none';
    }
    
    // hide upcoming 
    for(let j=0;j<allUpcoming.length;j++){
        allUpcoming[j].style.display='none';
    }
});

 
// =================for latest projects only 
let btnlatest = document.querySelector('.project-area .container .button-group #latest');
btnlatest.addEventListener('click',(e)=>{
    e.preventDefault();
    for(let i=0;i<colmd4.length;i++){
        colmd4[i].style.display='block';
    }
    e.preventDefault();
    //hiding popular 
    for(let i=0;i<allpopular.length;i++){
        allpopular[i].style.display='none';
    }
    //hide following 
    for(let k=0;k<allFollowing.length;k++){
        allFollowing[k].style.display='none';
    }
    
    // hide upcoming 
    for(let j=0;j<allUpcoming.length;j++){
        allUpcoming[j].style.display='none';
    }
});


//================== all projects 

let all = document.querySelector('.project-area .container .button-group #all');

all.addEventListener('click',(e)=>{
    e.preventDefault();
    for(let i=0;i<colmd4.length;i++){
        colmd4[i].style.display='block';
    }
});


// following projects 

let following = $('.project-area .container .button-group #follow');

$(following).click((e)=>{
    e.preventDefault();
    for(let i=0;i<colmd4.length;i++){
        colmd4[i].style.display='block';
    }
     //hiding popular 
    for(let i=0;i<allpopular.length;i++){
        allpopular[i].style.display='none';
    }
   // hide upcoming 
    for(let j=0;j<allUpcoming.length;j++){
        allUpcoming[j].style.display='none';
    }
     //hidding latest 
    alllatest.style.display='none';
})


//==============Upcoming projects 

let btnUpcom = document.querySelector('#upcom');

btnUpcom.addEventListener('click',(e)=>{
    e.preventDefault();
     for(let i=0;i<colmd4.length;i++){
        colmd4[i].style.display='block';
    }
    
     //hidding latest 
    alllatest.style.display='none';
    
    //hiding popular 
    for(let i=0;i<allpopular.length;i++){
        allpopular[i].style.display='none';
    }
    
     //hide following 
    for(let k=0;k<allFollowing.length;k++){
        allFollowing[k].style.display='none';
    }
});