(function createWindowLocationSearchPartsObject() {
    'use strict';
    var temporaryObject = {},
        searchParts = window.location.search.substring(1).split('&'),
        searchPartParts,
        i;

    for (i = 0; i < searchParts.length; i = i + 1) {
        searchPartParts = searchParts[i].split('=');
        temporaryObject[searchPartParts[0]] = searchPartParts[1];
    }

    window.location.searchParts = temporaryObject;

}());