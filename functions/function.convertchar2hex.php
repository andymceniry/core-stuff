<?php

function convertchar2hex($string)
{
    $string = str_replace('✁', '&#9985;', $string);  //  upper blade scissors
    $string = str_replace('✂', '&#9986;', $string);  //  black scissors
    $string = str_replace('✃', '&#9987;', $string);  //  lower blade scissors
    $string = str_replace('✄', '&#9988;', $string);  //  white scissors
    $string = str_replace('✅', '&#9989;', $string);  //  white heavy check mark
    $string = str_replace('✆', '&#9990;', $string);  //  telephone location sign
    $string = str_replace('✇', '&#9991;', $string);  //  tape drive
    $string = str_replace('✈', '&#9992;', $string);  //  airplane
    $string = str_replace('✉', '&#9993;', $string);  //  envelope
    $string = str_replace('✊', '&#9994;', $string);  //  raised fist
    $string = str_replace('✋', '&#9995;', $string);  //  raised hand
    $string = str_replace('✌', '&#9996;', $string);  //  victory hand
    $string = str_replace('✍', '&#9997;', $string);  //  writing hand
    $string = str_replace('✎', '&#9998;', $string);  //  lower right pencil
    $string = str_replace('✏', '&#9999;', $string);  //  pencil
    $string = str_replace('✐', '&#10000;', $string);  //  upper right pencil
    $string = str_replace('✑', '&#10001;', $string);  //  white nib
    $string = str_replace('✒', '&#10002;', $string);  //  black nib
    $string = str_replace('✓', '&#10003;', $string);  //  check mark
    $string = str_replace('✔', '&#10004;', $string);  //  heavy check mark
    $string = str_replace('✕', '&#10005;', $string);  //  multiplication x
    $string = str_replace('✖', '&#10006;', $string);  //  heavy multiplication x
    $string = str_replace('✗', '&#10007;', $string);  //  ballot x
    $string = str_replace('✘', '&#10008;', $string);  //  heavy ballot x
    $string = str_replace('✙', '&#10009;', $string);  //  outlined greek cross
    $string = str_replace('✚', '&#10010;', $string);  //  heavy greek cross
    $string = str_replace('✛', '&#10011;', $string);  //  open centre cross
    $string = str_replace('✜', '&#10012;', $string);  //  heavy open centre cross
    $string = str_replace('✝', '&#10013;', $string);  //  latin cross
    $string = str_replace('✞', '&#10014;', $string);  //  shadowed white latin cross
    $string = str_replace('✟', '&#10015;', $string);  //  outlined latin cross
    $string = str_replace('✠', '&#10016;', $string);  //  maltese cross
    $string = str_replace('✡', '&#10017;', $string);  //  star of david
    $string = str_replace('✢', '&#10018;', $string);  //  four teardrop-spoked asterisk
    $string = str_replace('✣', '&#10019;', $string);  //  four balloon-spoked asterisk
    $string = str_replace('✤', '&#10020;', $string);  //  heavy four balloon-spoked asterisk
    $string = str_replace('✥', '&#10021;', $string);  //  four club-spoked asterisk
    $string = str_replace('✦', '&#10022;', $string);  //  black four pointed star
    $string = str_replace('✧', '&#10023;', $string);  //  white four pointed star
    $string = str_replace('✨', '&#10024;', $string);  //  sparkles
    $string = str_replace('✩', '&#10025;', $string);  //  stress outlined white star
    $string = str_replace('✪', '&#10026;', $string);  //  circled white star
    $string = str_replace('✫', '&#10027;', $string);  //  open centre black star
    $string = str_replace('✬', '&#10028;', $string);  //  black centre white star
    $string = str_replace('✭', '&#10029;', $string);  //  outlined black star
    $string = str_replace('✮', '&#10030;', $string);  //  heavy outlined black star
    $string = str_replace('✯', '&#10031;', $string);  //  pinwheel star
    $string = str_replace('✰', '&#10032;', $string);  //  shadowed white star
    $string = str_replace('✱', '&#10033;', $string);  //  heavy asterisk
    $string = str_replace('✲', '&#10034;', $string);  //  open centre asterisk
    $string = str_replace('✳', '&#10035;', $string);  //  eight spoked asterisk
    $string = str_replace('✴', '&#10036;', $string);  //  eight pointed black star
    $string = str_replace('✵', '&#10037;', $string);  //  eight pointed pinwheel star
    $string = str_replace('✶', '&#10038;', $string);  //  six pointed black star
    $string = str_replace('✷', '&#10039;', $string);  //  eight pointed rectilinear black star
    $string = str_replace('✸', '&#10040;', $string);  //  heavy eight pointed rectilinear black star
    $string = str_replace('✹', '&#10041;', $string);  //  twelve pointed black star
    $string = str_replace('✺', '&#10042;', $string);  //  sixteen pointed asterisk
    $string = str_replace('✻', '&#10043;', $string);  //  teardrop-spoked asterisk
    $string = str_replace('✼', '&#10044;', $string);  //  open centre teardrop-spoked asterisk
    $string = str_replace('✽', '&#10045;', $string);  //  heavy teardrop-spoked asterisk
    $string = str_replace('✾', '&#10046;', $string);  //  six petalled black and white florette
    $string = str_replace('✿', '&#10047;', $string);  //  black florette
    $string = str_replace('❀', '&#10048;', $string);  //  white florette
    $string = str_replace('❁', '&#10049;', $string);  //  eight petalled outlined black florette
    $string = str_replace('❂', '&#10050;', $string);  //  circled open centre eight pointed star
    $string = str_replace('❃', '&#10051;', $string);  //  heavy teardrop-spoked pinwheel asterisk
    $string = str_replace('❄', '&#10052;', $string);  //  snowflake
    $string = str_replace('❅', '&#10053;', $string);  //  tight trifoliate snowflake
    $string = str_replace('❆', '&#10054;', $string);  //  heavy chevron snowflake
    $string = str_replace('❇', '&#10055;', $string);  //  sparkle
    $string = str_replace('❈', '&#10056;', $string);  //  heavy sparkle
    $string = str_replace('❉', '&#10057;', $string);  //  balloon-spoked asterisk
    $string = str_replace('❊', '&#10058;', $string);  //  eight teardrop-spoked propeller asterisk
    $string = str_replace('❋', '&#10059;', $string);  //  heavy eight teardrop-spoked propeller asterisk
    $string = str_replace('❌', '&#10060;', $string);  //  cross mark
    $string = str_replace('❍', '&#10061;', $string);  //  shadowed white circle
    $string = str_replace('❎', '&#10062;', $string);  //  negative squared cross mark
    $string = str_replace('❏', '&#10063;', $string);  //  lower right drop-shadowed white square
    $string = str_replace('❐', '&#10064;', $string);  //  upper right drop-shadowed white square
    $string = str_replace('❑', '&#10065;', $string);  //  lower right shadowed white square
    $string = str_replace('❒', '&#10066;', $string);  //  upper right shadowed white square
    $string = str_replace('❓', '&#10067;', $string);  //  black question mark ornament
    $string = str_replace('❔', '&#10068;', $string);  //  white question mark ornament
    $string = str_replace('❕', '&#10069;', $string);  //  white exclamation mark ornament
    $string = str_replace('❖', '&#10070;', $string);  //  black diamond minus white x
    $string = str_replace('❗', '&#10071;', $string);  //  heavy exclamation mark symbol
    $string = str_replace('❘', '&#10072;', $string);  //  light vertical bar
    $string = str_replace('❙', '&#10073;', $string);  //  medium vertical bar
    $string = str_replace('❚', '&#10074;', $string);  //  heavy vertical bar
    $string = str_replace('❛', '&#10075;', $string);  //  heavy single turned comma quotation mark ornament
    $string = str_replace('❜', '&#10076;', $string);  //  heavy single comma quotation mark ornament
    $string = str_replace('❝', '&#10077;', $string);  //  heavy double turned comma quotation mark ornament
    $string = str_replace('❞', '&#10078;', $string);  //  heavy double comma quotation mark ornament
    $string = str_replace('❟', '&#10079;', $string);  //  heavy low single comma quotation mark ornament
    $string = str_replace('❠', '&#10080;', $string);  //  heavy low double comma quotation mark ornament
    $string = str_replace('❡', '&#10081;', $string);  //  curved stem paragraph sign ornament
    $string = str_replace('❢', '&#10082;', $string);  //  heavy exclamation mark ornament
    $string = str_replace('❣', '&#10083;', $string);  //  heavy heart exclamation mark ornament
    $string = str_replace('❤', '&#10084;', $string);  //  heavy black heart
    $string = str_replace('❥', '&#10085;', $string);  //  rotated heavy black heart bullet
    $string = str_replace('❦', '&#10086;', $string);  //  floral heart
    $string = str_replace('❧', '&#10087;', $string);  //  rotated floral heart bullet
    $string = str_replace('❨', '&#10088;', $string);  //  medium left parenthesis ornament
    $string = str_replace('❩', '&#10089;', $string);  //  medium right parenthesis ornament
    $string = str_replace('❪', '&#10090;', $string);  //  medium flattened left parenthesis ornament
    $string = str_replace('❫', '&#10091;', $string);  //  medium flattened right parenthesis ornament
    $string = str_replace('❬', '&#10092;', $string);  //  medium left-pointing angle bracket ornament
    $string = str_replace('❭', '&#10093;', $string);  //  medium right-pointing angle bracket ornament
    $string = str_replace('❮', '&#10094;', $string);  //  heavy left-pointing angle quotation mark ornament
    $string = str_replace('❯', '&#10095;', $string);  //  heavy right-pointing angle quotation mark ornament
    $string = str_replace('❰', '&#10096;', $string);  //  heavy left-pointing angle bracket ornament
    $string = str_replace('❱', '&#10097;', $string);  //  heavy right-pointing angle bracket ornament
    $string = str_replace('❲', '&#10098;', $string);  //  light left tortoise shell bracket ornament
    $string = str_replace('❳', '&#10099;', $string);  //  light right tortoise shell bracket ornament
    $string = str_replace('❴', '&#10100;', $string);  //  medium left curly bracket ornament
    $string = str_replace('❵', '&#10101;', $string);  //  medium right curly bracket ornament
    $string = str_replace('❶', '&#10102;', $string);  //  dingbat negative circled digit one
    $string = str_replace('❷', '&#10103;', $string);  //  dingbat negative circled digit two
    $string = str_replace('❸', '&#10104;', $string);  //  dingbat negative circled digit three
    $string = str_replace('❹', '&#10105;', $string);  //  dingbat negative circled digit four
    $string = str_replace('❺', '&#10106;', $string);  //  dingbat negative circled digit five
    $string = str_replace('❻', '&#10107;', $string);  //  dingbat negative circled digit six
    $string = str_replace('❼', '&#10108;', $string);  //  dingbat negative circled digit seven
    $string = str_replace('❽', '&#10109;', $string);  //  dingbat negative circled digit eight
    $string = str_replace('❾', '&#10110;', $string);  //  dingbat negative circled digit nine
    $string = str_replace('❿', '&#10111;', $string);  //  dingbat negative circled number ten
    $string = str_replace('➀', '&#10112;', $string);  //  dingbat circled sans-serif digit one
    $string = str_replace('➁', '&#10113;', $string);  //  dingbat circled sans-serif digit two
    $string = str_replace('➂', '&#10114;', $string);  //  dingbat circled sans-serif digit three
    $string = str_replace('➃', '&#10115;', $string);  //  dingbat circled sans-serif digit four
    $string = str_replace('➄', '&#10116;', $string);  //  dingbat circled sans-serif digit five
    $string = str_replace('➅', '&#10117;', $string);  //  dingbat circled sans-serif digit six
    $string = str_replace('➆', '&#10118;', $string);  //  dingbat circled sans-serif digit seven
    $string = str_replace('➇', '&#10119;', $string);  //  dingbat circled sans-serif digit eight
    $string = str_replace('➈', '&#10120;', $string);  //  dingbat circled sans-serif digit nine
    $string = str_replace('➉', '&#10121;', $string);  //  dingbat circled sans-serif number ten
    $string = str_replace('➊', '&#10122;', $string);  //  dingbat negative circled sans-serif digit one
    $string = str_replace('➋', '&#10123;', $string);  //  dingbat negative circled sans-serif digit two
    $string = str_replace('➌', '&#10124;', $string);  //  dingbat negative circled sans-serif digit three
    $string = str_replace('➍', '&#10125;', $string);  //  dingbat negative circled sans-serif digit four
    $string = str_replace('➎', '&#10126;', $string);  //  dingbat negative circled sans-serif digit five
    $string = str_replace('➏', '&#10127;', $string);  //  dingbat negative circled sans-serif digit six
    $string = str_replace('➐', '&#10128;', $string);  //  dingbat negative circled sans-serif digit seven
    $string = str_replace('➑', '&#10129;', $string);  //  dingbat negative circled sans-serif digit eight
    $string = str_replace('➒', '&#10130;', $string);  //  dingbat negative circled sans-serif digit nine
    $string = str_replace('➓', '&#10131;', $string);  //  dingbat negative circled sans-serif number ten
    $string = str_replace('➔', '&#10132;', $string);  //  heavy wide-headed rightwards arrow
    $string = str_replace('➕', '&#10133;', $string);  //  heavy plus sign
    $string = str_replace('➖', '&#10134;', $string);  //  heavy minus sign
    $string = str_replace('➗', '&#10135;', $string);  //  heavy division sign
    $string = str_replace('➘', '&#10136;', $string);  //  heavy south east arrow
    $string = str_replace('➙', '&#10137;', $string);  //  heavy rightwards arrow
    $string = str_replace('➚', '&#10138;', $string);  //  heavy north east arrow
    $string = str_replace('➛', '&#10139;', $string);  //  drafting point rightwards arrow
    $string = str_replace('➜', '&#10140;', $string);  //  heavy round-tipped rightwards arrow
    $string = str_replace('➝', '&#10141;', $string);  //  triangle-headed rightwards arrow
    $string = str_replace('➞', '&#10142;', $string);  //  heavy triangle-headed rightwards arrow
    $string = str_replace('➟', '&#10143;', $string);  //  dashed triangle-headed rightwards arrow
    $string = str_replace('➠', '&#10144;', $string);  //  heavy dashed triangle-headed rightwards arrow
    $string = str_replace('➡', '&#10145;', $string);  //  black rightwards arrow
    $string = str_replace('➢', '&#10146;', $string);  //  three-d top-lighted rightwards arrowhead
    $string = str_replace('➣', '&#10147;', $string);  //  three-d bottom-lighted rightwards arrowhead
    $string = str_replace('➤', '&#10148;', $string);  //  black rightwards arrowhead
    $string = str_replace('➥', '&#10149;', $string);  //  heavy black curved downwards and rightwards arrow
    $string = str_replace('➦', '&#10150;', $string);  //  heavy black curved upwards and rightwards arrow
    $string = str_replace('➧', '&#10151;', $string);  //  squat black rightwards arrow
    $string = str_replace('➨', '&#10152;', $string);  //  heavy concave-pointed black rightwards arrow
    $string = str_replace('➩', '&#10153;', $string);  //  right-shaded white rightwards arrow
    $string = str_replace('➪', '&#10154;', $string);  //  left-shaded white rightwards arrow
    $string = str_replace('➫', '&#10155;', $string);  //  back-tilted shadowed white rightwards arrow
    $string = str_replace('➬', '&#10156;', $string);  //  front-tilted shadowed white rightwards arrow
    $string = str_replace('➭', '&#10157;', $string);  //  heavy lower right-shadowed white rightwards arrow
    $string = str_replace('➮', '&#10158;', $string);  //  heavy upper right-shadowed white rightwards arrow
    $string = str_replace('➯', '&#10159;', $string);  //  notched lower right-shadowed white rightwards arrow
    $string = str_replace('➰', '&#10160;', $string);  //  curly loop
    $string = str_replace('➱', '&#10161;', $string);  //  notched upper right-shadowed white rightwards arrow
    $string = str_replace('➲', '&#10162;', $string);  //  circled heavy white rightwards arrow
    $string = str_replace('➳', '&#10163;', $string);  //  white-feathered rightwards arrow
    $string = str_replace('➴', '&#10164;', $string);  //  black-feathered south east arrow
    $string = str_replace('➵', '&#10165;', $string);  //  black-feathered rightwards arrow
    $string = str_replace('➶', '&#10166;', $string);  //  black-feathered north east arrow
    $string = str_replace('➷', '&#10167;', $string);  //  heavy black-feathered south east arrow
    $string = str_replace('➸', '&#10168;', $string);  //  heavy black-feathered rightwards arrow
    $string = str_replace('➹', '&#10169;', $string);  //  heavy black-feathered north east arrow
    $string = str_replace('➺', '&#10170;', $string);  //  teardrop-barbed rightwards arrow
    $string = str_replace('➻', '&#10171;', $string);  //  heavy teardrop-shanked rightwards arrow
    $string = str_replace('➼', '&#10172;', $string);  //  wedge-tailed rightwards arrow
    $string = str_replace('➽', '&#10173;', $string);  //  heavy wedge-tailed rightwards arrow
    $string = str_replace('➾', '&#10174;', $string);  //  open-outlined rightwards arrow
    $string = str_replace('➿', '&#10175;', $string);  //  double curly loop
    return $string;

}

?>