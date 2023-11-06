document.write("■■■問1■■■")
document.write("<br>");
document.write("<br>");

for(var star1=1; star1<=5; star1++){
    document.write("★");
}
document.write("<br>");
document.write("<br>");
document.write("■■■問2■■■")
document.write("<br>");
document.write("<br>");

for(var star2=1; star2<=2; star2++){
    for(var star3=1; star3<=3; star3++){
        document.write("★");
    }
    document.write("<br>");
}
document.write("<br>");
document.write("■■■問3■■■")
document.write("<br>");
document.write("<br>");

for(var star4=1; star4<=2; star4++){
    for(var star5=1; star5<=5; star5++){
        document.write("☆");
    }
    document.write("<br>");
}
document.write("<br>");
document.write("■■■問4■■■")
document.write("<br>");
document.write("<br>");

for(var star6=1; star6<=4; star6++){
    for(var star7=1; star7<=5; star7++){
        document.write("★");
    }
    document.write("<br>");
}
document.write("<br>");
document.write("■■■問5■■■")
document.write("<br>");
document.write("<br>");

for(var star8=1; star8<=4; star8++){
    for(var star9=1; star9<=3; star9++){
        document.write("★");
    }
    document.write("<br>");
}
document.write("<br>");
document.write("■■■問6■■■")
document.write("<br>");
document.write("<br>");

for(var star10=0; star10<3; star10++){
    for(var star11=0; star11<=2; star11++){
        if(star11%2==0){
            document.write("★");
        } else {
            document.write("☆");
        }
    }
    document.write("<br>");
}
document.write("<br>");
document.write("■■■問7■■■")
document.write("<br>");
document.write("<br>");

for(var star12=0; star12<4; star12++){
    for(var star13=0; star13<=4; star13++){
        if(star13%2==0){
        document.write("★");
        } else {
            document.write("☆");
        }
    }
    document.write("<br>");
}
document.write("<br>");
document.write("■■■問8■■■")
document.write("<br>");
document.write("<br>");

for(star14=1; star14<6; star14++){
    for(star15=1; star15<star14+1; star15++){
        document.write("★");
    }
    document.write("<br>");
}