<?php

//  create a simple array, copy it then add item to new array
echo "<br /><b>Array</b>";
$a = array('apple', 'banana');
$b = $a;
array_push($b, 'cherry');
echo "<br />"; print_r($a);
echo "<br />"; print_r($b);

//  create an associative array, copy it then add item to new array
echo "<br /><b>Associative Array</b>";
$a = array('apple' => 'green', 'banana' => 'yellow');
$b = $a;
$b['cherry'] = 'red';
echo "<br />"; print_r($a);
echo "<br />"; print_r($b);

?>


<script>

    var namespace = {};
    namespace.basicObjectClone = function(a) {
        var c = {};
        for(var key in a) {
            if (a.hasOwnProperty(key)) {
                if (typeof a[key] == 'object') {
                    c[key] = namespace.basicObjectClone(a[key]);
                } else {
                    c[key] = a[key];
                }
            }
        }
        return c;
    }



    //  create a simple array, copy it then add item to new array
    console.group('Array');
    var a = ['apple', 'banana'];
    var b = a;
    b.push('cherry');
    console.log(a);
    console.log(b);
    console.groupEnd('Array');


    //  create a simple array, copy it (using slice) then add item to new array
    console.group('Array (using slice)');
    var a = ['apple', 'banana'];
    var b = a.slice();  //  use slice method
    b.push('cherry');
    console.log(a);
    console.log(b);
    console.groupEnd('Array (using slice)');


    //  create an object, copy it then add item to new object
    console.group('Single Level Object');
    var a = {
        'apple': 'green', 
        'banana': 'yellow'
        };
    var b = a;
    b.cherry = 'red';
    console.log(a);
    console.log(b);
    console.groupEnd('Single Level Object');



    //  create an object, copy it (using loop) then add item to new object
    console.group('Single Level Object (using loop)');
    var a = {
        'apple': 'green', 
        'banana': 'yellow'
        };
    var b = {};

    for(var key in a) {
        if (a.hasOwnProperty(key)) {
            b[key] = a[key];
        }
    }

    b.cherry = 'red';
    console.log(a);
    console.log(b);
    console.groupEnd('Single Level Object');



    //  create an object, copy it (using loop) then add item to new object  //  FAILED
    console.group('Multi Level Object (using loop)');
    var a = {
        'apple': 'green', 
        'banana': 'yellow',
            'animals': {
                'a': 'aardvark',
                'b': 'badger',
            }
        };
    var b = {};

    for(var key in a) {
        if (a.hasOwnProperty(key)) {
            b[key] = a[key];
        }
    }

    b.cherry = 'red';
    b.animals.c = 'chicken';
    console.log(a.animals);
    console.log(b.animals);
    console.groupEnd('Multi Level Object (using loop)');






    //  create an object, copy it (using loop) then add item to new object  //  FAILED
    console.group('Multi Level Object (using function)');
    var a = {
        'apple': 'green', 
        'banana': 'yellow',
            'animals': {
                'a': 'aardvark',
                'b': 'badger',
            }
        };
    var b = namespace.basicObjectClone(a);

    b.cherry = 'red';
    b.animals.c = 'chicken';
    console.log(a.animals);
    console.log(b.animals);
    console.groupEnd('Multi Level Object (using function)');


    //  create an object, copy it (using loop) then add item to new object  //  FAILED
    console.group('Single Level Object (using function)');
    var a = {
        'apple': 'green', 
        'banana': 'yellow'
        };
    var b = namespace.basicObjectClone(a);

    b.cherry = 'red';
    console.log(a);
    console.log(b);
    console.groupEnd('Single Level Object (using function)');




</script>