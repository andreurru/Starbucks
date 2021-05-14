<!DOCTYPE html>
<html>
    <head>
        <title>Find Stores</title>
        <script src="js/store-data.js"></script>
        <script src="js/index.js"></script>
        <link rel="stylesheet" href="style/style.css">
        <script src="https://kit.fontawesome.com/c939d0e917.js"></script>
    </head>
    <body>
        <div class="rightText">
            <div class="title2"><a href="../indexp.php">Home</a></div>
        </div>
        <div class="top"></div>
        <img class="img" src="logo.jpg">
        <div class="left">
        <div class="title">Store Locator</div>
        </div>
        <div class="search-container">
            <div class="search">
                <input id="zip-code-input" type="text" placeholder="Enter zip"/>
                <i class="fas fa-search" onclick="searchStores()"></i>
            </div>
        </div>
        <div class="stores-list-container">
            <div class="stores-list">
                <div class="store-container">
                    <div class="store-info-container">
                        <div class="store-address">
                            <span>8480 Beverly Blvd</span>
                            <span>Los Angeles, CA 90048</span>
                        </div>
                        <div class="store-phone-number">345-289-5434</div>
                    </div>
                    <div class="store-number-container">
                        <div class="store-number">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="map"></div>
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD72-ulnpG13CPYN7w2F-aCk7tpKD4nsj8&callback=initMap">
        </script>
    </body>
</html>
