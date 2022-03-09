var photos=["service1.png","service2.jpg","s3.png"];
var imagetag= document.querySelector("img.bi");
var count = 0;

function Next(){
    count++;
    if(count>=photos.length){
        count=0;
        imagetag.src = photos[count];
    }else{
        imagetag.src = photos[count];
    }
    imagetag.src = photos[count];

}
function prev(){
    count--;
    if(count< 0){
        count=photos.length -1;
        imagetag.src = photos[count];
    }else{
        imagetag.src = photos[count];
    }
    imagetag.src = photos[count];

}