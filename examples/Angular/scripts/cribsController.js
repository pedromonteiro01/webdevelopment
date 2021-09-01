angular
    .module("ngCribs", [])
    .controller("cribsController", function($scope) {  
        $scope.cribs=[
            { 
                "type": "Condo",
                "price": "200000",
                "address": "213 Grove Street",
                "description": "Excellent place"
            },
            { 
                "type": "House",
                "price": "200000",
                "address": "213 Grove Street",
                "description": "Excellent place"
            },
            { 
                "type": "Duplex",
                "price": "200000",
                "address": "213 Grove Street",
                "description": "Excellent place"
            }
        ]; 
    } );