var a1=1;
switch(a1){
        case 0:
        document.write("A");
        break;
        
        case 1:
        document.write("B");
        break;
}
document.write("<br>");
var a2=3;
switch(a2){
    case 0:
        document.write("A");
        break;
        
    case 1:
        document.write("B");
        break;
        
    default:
        document.write("C");
}
document.write("<br>");
var a3="青";
switch(a3){
    case "赤":
        document.write("紅組")
        break;
        
    case "白":
        document.write("白組");
        break;
        
    case "青":
        document.write("青組");
        break;
}
document.write("<br>");
var star="☆";
switch(star){
    case "★":
        document.write("黒い星です");
        break;
        
    case "☆":
        document.write("白い星です");
        break;
        
    default:
        document.write("その他記号です");
}
document.write("<br>");
var age=70;
switch(age){
    case 70:
        document.write("古希");
        break;
        
    case 80:
        document.write("米寿");
        break;
        
    default:
        document.write(age+"歳");
}
document.write("<br>");
var score=99;
switch(score){
    case 99:
        document.write("おしい！");
        break;
        
    case 100:
        document.write("満点です！");
        break;
        
    default:
        document.write(score+"点です！");
}