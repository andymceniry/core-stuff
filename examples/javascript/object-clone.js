
var namespace = {},
    a,
    b,
    key;


//  this is the function we use to copy objects with basic content
namespace.basicObjectClone = function (objToClone) {

    'use strict';

    var newObject = {},
        key;

    for (key in objToClone) {
        if (objToClone.hasOwnProperty(key)) {
            if (typeof objToClone[key] === 'object') {
                newObject[key] = namespace.basicObjectClone(objToClone[key]);
            } else {
                newObject[key] = objToClone[key];
            }
        }
    }
    return newObject;
};






//  create a simple array, copy it then add item to new array
console.group('Array');
a = ['apple', 'banana'];
b = a;
b.push('cherry');
console.log(a);
console.log(b);
console.groupEnd('Array');


//  create a simple array, copy it (using slice) then add item to new array
console.group('Array (using slice)');
a = ['apple', 'banana'];
b = a.slice();  //  use slice method
b.push('cherry');
console.log(a);
console.log(b);
console.groupEnd('Array (using slice)');


//  create an object, copy it then add item to new object
console.group('Single Level Object');
a = {
    'apple': 'green',
    'banana': 'yellow'
};
b = a;
b.cherry = 'red';
console.log(a);
console.log(b);
console.groupEnd('Single Level Object');



//  create an object, copy it (using loop) then add item to new object
console.group('Single Level Object (using loop)');
a = {
    'apple': 'green',
    'banana': 'yellow'
};
b = {};

for (key in a) {
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
a = {
    'apple': 'green',
    'banana': 'yellow',
    'animals': {
        'a': 'aardvark',
        'b': 'badger'
    }
};
b = {};

for (key in a) {
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
a = {
    'apple': 'green',
    'banana': 'yellow',
    'animals': {
        'a': 'aardvark',
        'b': 'badger'
    }
};
b = namespace.basicObjectClone(a);

b.cherry = 'red';
b.animals.c = 'chicken';
console.log(a.animals);
console.log(b.animals);
console.groupEnd('Multi Level Object (using function)');


//  create an object, copy it (using loop) then add item to new object  //  FAILED
console.group('Single Level Object (using function)');
a = {
    'apple': 'green',
    'banana': 'yellow'
};
b = namespace.basicObjectClone(a);

b.cherry = 'red';
console.log(a);
console.log(b);
console.groupEnd('Single Level Object (using function)');

