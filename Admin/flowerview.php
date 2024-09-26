<!--<!DOCTYPE html>

Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <style>
 /* User links */
            .user-links {
                display: flex;
                float: right;
                padding: 0px 20px 0px 20px;
            }

            .user-links a {
                text-decoration: none;
                color: blue;
                font-size: 20px;
                margin-left: 20px;

            }

            /* Welcome section */
            .welcome-section {
                text-align: center;


                padding:20px 0px 40px 0px;

                background-color: #f7f7f7;
            }

            .welcome-section h1 {
                font-size: 36px;
                color: #333;
                margin-bottom: 10px;
                margin-right: 150px;
            }

            .welcome-section p {
                font-size: 18px;
                color: #666;
                margin-right: 150px;
            }
           
            .ilogo{
                float:left;
                width:250px;
                padding: 10px 20px 10px 20px;
            }
            </style>
    </head>
    <body>
        <div class="ilogo">


            <a href="../index.php">
                <img src="../cdn/shop/files/0fc34013-64d2-4011-be96-996a701b5f5e.jpg" alt="Phuler - Flower Shop Shopify Theme">
            </a>

        </div>
        <section class="welcome-section">
            <h1>Welcome to </h1>
        <p>Manage your flower shop efficiently with our powerful admin tools.</p>
       
            <div class="user-links">
                <a href="#">Profile</a>
                <a href="#">Logout</a>
            </div>
        </section>
        
        <?php
//        include 'header.php';
        ?>
        <select name="view">
            <option value="flower">flower</option>
            <option value="bouquet">bouquet</option>
            <option value="mala">mala</option>
        </select>
    </body>
</html>-->
<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Shop Admin</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Global Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container {
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    background-color: white;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

/* Heading */
h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

/* Filter Section */
.filter-section {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.filter-category, .filter-type {
    flex: 1;
    margin-right: 20px;
}

.filter-category label, .filter-type label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.filter-category select, .filter-type select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

#applyFilters {
    padding: 10px 20px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

#applyFilters:hover {
    background-color: #218838;
}

/* Flower List Section */
.flower-list h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #555;
}

.flower-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 20px;
}

.flower-card {
    background-color: white;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.flower-card img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 10px;
}

.flower-card h3 {
    font-size: 18px;
    margin-bottom: 10px;
    color: #333;
}

.flower-card p {
    font-size: 14px;
    color: #777;
}

.flower-card p:last-child {
    font-weight: bold;
    color: #333;
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Flower Shop Admin</h1>
        
         Filter Section 
        <div class="filter-section">
            <div class="filter-category">
                <label for="category">Filter by Category:</label>
                <select id="category">
                    <option value="all">All</option>
                    <option value="bouquet">Bouquet</option>
                    <option value="mala">Mala</option>
                    <option value="decor">Decor</option>
                </select>
            </div>

            <div class="filter-type">
                <label for="type">Filter by Type:</label>
                <select id="type">
                    <option value="all">All</option>
                    <option value="rose">Rose</option>
                    <option value="lily">Lily</option>
                </select>
            </div>

            <button id="applyFilters">Apply Filters</button>
        </div>

         Flower List Section 
        <div class="flower-list">
            <h2>Available Flowers</h2>
            <div class="flower-grid" id="flowerGrid">
                 Flower items will be rendered here 
                 Example of a flower card 
                <div class="flower-card">
                    <img src="https://example.com/rose.jpg" alt="Rose">
                    <h3>Red Rose</h3>
                    <p>Category: Bouquet</p>
                    <p>Type: Rose</p>
                    <p>Price: $15</p>
                    <p>Stock: 20</p>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Flower Shop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .filter-section {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .filter-section select, .filter-section button {
            padding: 10px;
            font-size: 16px;
        }
        .flower-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .flower-item {
            background-color: white;
            padding: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }
        .flower-item img {
            max-width: 100%;
            border-radius: 8px;
        }
        .flower-item h3 {
            margin: 10px 0;
            font-size: 18px;
            color: #555;
        }
        .flower-item p {
            font-size: 16px;
            color: #777;
        }
        .upload-section {
            margin: 30px 0;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .upload-section h2 {
            margin-bottom: 20px;
        }
        .upload-section input, .upload-section select, .upload-section button {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            font-size: 16px;
        }
        .upload-section button {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        .upload-section button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Admin Panel - View Flowers</h1>
        
        <!-- Filter Section -->
        <div class="filter-section">
            <div>
                <label for="category">Filter by Category:</label>
                <select id="category">
                    <option value="all">All</option>
                    <option value="bouquet">Bouquet</option>
                    <option value="mala">Mala</option>
                    <option value="decor">Decor</option>
                </select>
            </div>
            <div>
                <label for="type">Filter by Type:</label>
                <select id="type">
                    <option value="all">All</option>
                    <option value="rose">Rose</option>
                    <option value="lily">Lily</option>
                </select>
            </div>
            <button onclick="filterFlowers()">Filter</button>
        </div>

        <!-- Flower Grid -->
        <div class="flower-grid" id="flowerGrid">
            <!-- Flower items will be dynamically added here -->
        </div>

        <!-- Upload Section -->
        <div class="upload-section">
            <h2>Add New Flower</h2>
            <input type="text" id="flowerName" placeholder="Flower Name">
            <select id="flowerCategory">
                <option value="bouquet">Bouquet</option>
                <option value="mala">Mala</option>
                <option value="decor">Decor</option>
            </select>
            <select id="flowerType">
                <option value="rose">Rose</option>
                <option value="lily">Lily</option>
            </select>
            <input type="number" id="flowerPrice" placeholder="Price">
            <input type="file" id="flowerImage" accept="image/*">
            <button onclick="addFlower()">Add Flower</button>
        </div>
    </div>

    <script>
        let flowers = [];

        function filterFlowers() {
            const category = document.getElementById('category').value;
            const type = document.getElementById('type').value;
            const flowerGrid = document.getElementById('flowerGrid');
            flowerGrid.innerHTML = '';
            
            const filteredFlowers = flowers.filter(flower => {
                return (category === 'all' || flower.category === category) &&
                       (type === 'all' || flower.type === type);
            });

            filteredFlowers.forEach(flower => {
                const flowerItem = `
                    <div class="flower-item">
                        <img src="${flower.image_url}" alt="${flower.name}">
                        <h3>${flower.name}</h3>
                        <p>Category: ${flower.category}</p>
                        <p>Type: ${flower.type}</p>
                        <p>Price: $${flower.price.toFixed(2)}</p>
                    </div>
                `;
                flowerGrid.innerHTML += flowerItem;
            });
        }

        function addFlower() {
            const name = document.getElementById('flowerName').value;
            const category = document.getElementById('flowerCategory').value;
            const type = document.getElementById('flowerType').value;
            const price = parseFloat(document.getElementById('flowerPrice').value);
            const imageInput = document.getElementById('flowerImage');
            
            if (!name || !price || !imageInput.files.length) {
                alert('Please fill all fields and upload an image');
                return;
            }

            const image_url = URL.createObjectURL(imageInput.files[0]);
            flowers.push({ name, category, type, price, image_url });

            filterFlowers();
        }
    </script>
</body>
</html>



