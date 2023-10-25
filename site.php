<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agric Connect</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #4CAF50;
            padding: 15px;
            text-align: center;
            color: white;
        }

        .hero {
            background: url('agriculture-image.jpg') no-repeat center center/cover;
            height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .features {
            padding: 50px 0;
            text-align: center;
        }

        .contact-form {
            background-color: #f4f4f4;
            padding: 50px 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <h1>Agric Connect</h1>
        <p>Your Ultimate Agricultural Partner</p>
    </div>

    <div class="hero">
        <h2>Welcome to Agric Connect</h2>
        <p>Connecting Farmers, Buyers, and Sellers</p>
        <a href="#features">Explore Features</a>
    </div>

    <div id="features" class="features">
      <h2>Farmers Connect</h2>
      <div id="comments-container">
      </div>
      <h3>Share Your Ideas</h3>
      <form id="comment-form">
          <input type="text" id="comment-name" placeholder="Your Name" required><br><br>
            <input type="varchar" id="comment-email" placeholder="Your Email" required><br><br>
          <textarea id="comment-message" placeholder="Your Comment" required></textarea><br><br>
          <button type="submit">Submit</button>
      </form>
  </div>
  <script>
    const commentForm = document.getElementById('comment-form');
    const commentsContainer = document.getElementById('comments-container');

    commentForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const name = document.getElementById('comment-name').value;
        const email = document.getElementById('comment-email').value;
        const message = document.getElementById('comment-message').value;


        if (name && email && message) {

            const commentDiv = document.createElement('div');
            commentDiv.classList.add('comment');
            commentDiv.innerHTML = `<strong>${name}</strong> (${email}):<br>${message}<hr>`;
            commentsContainer.appendChild(commentDiv);
            document.getElementById('comment-name').value = '';
            document.getElementById('comment-email').value = '';
            document.getElementById('comment-message').value = '';
        } else {
            alert('Please fill out all fields.');
        }
    });
</script>


<h3>Buy Fresh Farm Products</h3>
<div id="product-list"></div>

<script>
    var products = [
        {
            name: "pineapples",
            price: 2.99,
            farmer: "Mr Sani",
            image:"download.jpeg",

           description: "Fresh and juicy apples from our orchard."

        },
        {
            name: "Tomatoes",
            price: 1.49,
            farmer: "Mr Abu",
            image:"tomato.jpeg",
            description: "Ripe and plump tomatoes, perfect for salads."
        },
        {
            name: "Watermellon",
            price: 1.49,
            farmer: "Mr Auwal",
            image: "water.jpeg",
            description: "Fresh and juicy apples from our orchard."
        },
        {
            name: "Apple",
            price: 1.49,
            farmer: "haj kulu",
            image: "apple.jpeg",
            description: "Fresh and juicy apples from our orchard."
        },



    ];

    function displayProducts() {
        var productList = document.getElementById("product-list");

        products.forEach(function(product) {
            var productElement = document.createElement("div");
            productElement.className = "product-block";

            var imgElement = document.createElement("img");
            imgElement.src = product.image;
            imgElement.alt = product.name;
            productElement.appendChild(imgElement);

            var detailsElement = document.createElement("div");
            detailsElement.className = "product-details";
            detailsElement.innerHTML = "<strong>" + product.name + "</strong><br>" +
                                       "<span class='description'>" + product.description + "</span><br>" +
                                       "Price: $" + product.price.toFixed(2) + " per unit<br>" +
                                       "Sold by: " + product.farmer +
                                       "<button onclick='purchaseProduct(\"" + product.name + "\", " + product.price + ")'>Buy</button>";

            productElement.appendChild(detailsElement);
            productList.appendChild(productElement);
        });
    }

    function purchaseProduct(productName, price) {
        alert("You have purchased " + productName + " for $" + price.toFixed(2));
    }


    displayProducts();
</script>

</div>
</div>

<div>
    <h3>Sell Farm Products</h3>
    <p>Share details about your farm products with the community:</p>
    <form id="sell-form">
        <input type="text" id="product-name" placeholder="Product Name" required><br><br>
        <input type="number" id="product-price" placeholder="Price per Unit ($)" required><br><br>
        <textarea id="product-description" placeholder="Product Description" required></textarea><br><br>
        <button type="submit">Post Product</button>
    </form>

    <h3>Community Listings</h3>
    <div id="community-listings">

    </div>
</div>

<script>
    document.getElementById("sell-form").addEventListener("submit", function(event) {
        event.preventDefault();

        var productName = document.getElementById("product-name").value;
        var productPrice = parseFloat(document.getElementById("product-price").value);
        var productDescription = document.getElementById("product-description").value;


        document.getElementById("product-name").value = "";
        document.getElementById("product-price").value = "";
        document.getElementById("product-description").value = "";


        var listingElement = document.createElement("div");
        listingElement.className = "product-listing";
        listingElement.innerHTML = "<strong>" + productName + "</strong><br>" +
                                   "<span class='description'>" + productDescription + "</span><br>" +
                                   "Price: $" + productPrice.toFixed(2) + " per unit";


        document.getElementById("community-listings").appendChild(listingElement);
    });
</script>

<style>
    .product-listing {
        margin-bottom: 20px;
    }

    .product-listing .description {
        color: #666;
    }
</style>
    </div>

    <div class="contact-form">
        <h2>Contact Us</h2>
        <p>Have any questions? Feel free to reach out!</p>
        <form>
            <input type="text" placeholder="Your Name"><br><br>
            <input type="email" placeholder="Your Email"><br><br>
            <textarea placeholder="Your Message"></textarea><br><br>
            <button type="submit">Submit</button>
        </form>
    </div>
    <script>
    const contactForm = document.getElementById('contactForm');
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const messageInput = document.getElementById('message');
    const submitBtn = document.getElementById('submitBtn');
    const responseMessage = document.getElementById('responseMessage');


    contactForm.addEventListener('submit', function(event) {
        event.preventDefault();


        if (nameInput.value === '' || emailInput.value === '' || messageInput.value === '') {
            alert('Please fill out all fields');
        } else {

            responseMessage.textContent = 'Request submitted';

            nameInput.value = '';
            emailInput.value = '';
            messageInput.value = '';
        }
    });
</script>

</body>

</html>
