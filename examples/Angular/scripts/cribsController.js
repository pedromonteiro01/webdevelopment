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
                "price": "410500",
                "address": "213 Winding Way",
                "description": "Beautiful home"
            },
            { 
                "type": "Duplex",
                "price": "395000",
                "address": "834 River Lane",
                "description": "Great neighbourhood, a lot's of green space"
            }
        ]; 
    } );