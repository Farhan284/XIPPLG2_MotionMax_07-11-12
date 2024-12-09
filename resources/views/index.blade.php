<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/IconWeb_MM 1.png" sizes="192x192" type="image/png">
    <title>MotionMax</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white">
    <!-- Header Section -->
    <header class="bg-white shadow-md fixed w-full z-50 transition-all duration-300">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-4">
                <div class="flex items-center">
                    <button id="menu" class="text-2xl md:hidden">
                        <i class="fas fa-bars"></i>
                    </button>
                    <a href="#" class="flex items-center space-x-2 text-xl font-bold">
                        <img src="/images/MM.png" alt="MotionMax Logo" class="h-8">
                        <span>MotionMax</span>
                    </a>
                </div>
                
                <nav class="hidden md:flex space-x-6">
                    <a href="#home" class="hover:text-blue-600 capitalize">home</a>
                    <a href="#daily-deals" class="hover:text-blue-600 capitalize">daily deals</a>
                    <a href="#best-sellers" class="hover:text-blue-600 capitalize">best sellers</a>
                    <a href="#product" class="hover:text-blue-600 capitalize">product</a>
                    <a href="#about" class="hover:text-blue-600 capitalize">about</a>
                </nav>
            </div>
        </div>
    </header>

 <!-- Hero Section -->
<section id="home" class="relative pt-24 pb-12 min-h-[600px] flex items-center bg-image">
    <!-- Background image with overlay -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-black/50 to-transparent z-10"></div>
    </div>

    <!-- Content -->
    <div class="container mx-auto px-4 relative z-20">
        <div class="max-w-2xl text-white">
            <h3 class="text-4xl font-bold mb-4 text-white">Free Runner</h3>
            <p class="mb-6 text-gray-100">
                Lightweight and super comfortable running shoes 
                with breathable materials, responsive cushioning, 
                ergonomic design and superior grip, making every 
                step more powerful and stylish, perfect for both 
                runners and everyday activities.
            </p>
            <a href="#product" class="inline-block bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition">
                shop now
            </a>
        </div>
    </div>
</section>
<style>
    .bg-image {
        background-image: url('/css/home.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>

    

    <!-- Daily Deals Section -->
    <section id="daily-deals" class="py-12">
        <h2 class="text-3xl font-bold text-center mb-8">Daily Deals</h2>
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="relative overflow-hidden rounded-lg shadow-lg">
                    <img src="/images/collection-1.png" alt="" class="w-full">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center text-white">
                        <span class="text-sm uppercase">limited offer</span>
                        <h3 class="text-2xl font-bold my-2">upto 50% off</h3>
                        <a href="#product" class="bg-white text-black px-6 py-2 rounded-md hover:bg-gray-200 transition">
                            shop now
                        </a>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg shadow-lg">
                    <img src="/images/collection-2.png" alt="" class="w-full">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center text-white">
                        <span class="text-sm uppercase">limited offer</span>
                        <h3 class="text-2xl font-bold my-2">upto 50% off</h3>
                        <a href="#product" class="bg-white text-black px-6 py-2 rounded-md hover:bg-gray-200 transition">
                            shop now
                        </a>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg shadow-lg">
                    <img src="/images/collection-3.png" alt="" class="w-full">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center text-white">
                        <span class="text-sm uppercase">limited offer</span>
                        <h3 class="text-2xl font-bold my-2">upto 50% off</h3>
                        <a href="#product" class="bg-white text-black px-6 py-2 rounded-md hover:bg-gray-200 transition">
                            shop now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Best Sellers Section -->
<section id="best-sellers" class="py-12 bg-white-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8">Best Sellers</h2>
        
        <!-- Main Slider Container -->
        <div class="relative">
            <!-- Navigation Buttons -->
            <div class="swiper-button-prev absolute left-0 top-1/2 transform -translate-y-1/2 z-10 text-blue-600 hover:text-blue-800 cursor-pointer"></div>
            <div class="swiper-button-next absolute right-0 top-1/2 transform -translate-y-1/2 z-10 text-blue-600 hover:text-blue-800 cursor-pointer"></div>
            
            <!-- Slider -->
            <div class="swiper best-sellers-slider">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="images/Best Sell.png" alt="best-sellers Image" 
                                 class="w-full h-64 object-cover hover:scale-105 transition-transform duration-300">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Premium Runner</h3>
                                <p class="text-gray-600 mb-2">Best selling running shoes of 2024</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-blue-600 font-bold">$129.99</span>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="images/Best Sell2.png" alt="best-sellers Image" 
                                 class="w-full h-64 object-cover hover:scale-105 transition-transform duration-300">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Urban Sport</h3>
                                <p class="text-gray-600 mb-2">Trending street style favorite</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-blue-600 font-bold">$149.99</span>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="images/Best Sell3.png" alt="best-sellers Image" 
                                 class="w-full h-64 object-cover hover:scale-105 transition-transform duration-300">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Classic Comfort</h3>
                                <p class="text-gray-600 mb-2">All-day comfort guarantee</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-blue-600 font-bold">$139.99</span>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

                <!-- Pagination -->
                <div class="swiper-pagination mt-4"></div>
            </div>
        </div>
    </div>
</section>

    <!-- Products Section -->
    <section id="product" class="py-12">
    <section id="product" class="py-12">
    <h2 class="text-3xl font-bold text-center mb-8">Our Products</h2>
    <div class="container mx-auto px-4">
        <div id="product-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Products will be loaded here -->
        </div>
    </div>
</section>

<section id="about" class="py-12 bg-white-100">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-8">About Us</h2>
        <div class="flex flex-col md:flex-row items-center gap-8">
            <div class="md:w-1/3">
                <img src="/images/about.png" alt="" class="w-full rounded-lg">
            </div>
            <div class="md:w-2/3">
                <h3 class="text-3xl font-bold mb-4">MotionMax</h3>
                <p class="text-gray-600 text-lg">
                    MotionMax is a user-friendly e-commerce platform for 
                    buying and selling shoes. It offers a wide range of 
                    footwear, including sneakers, sports shoes, and formal 
                    styles from top brands. The site provides detailed 
                    product descriptions, high-quality assets/images, and customer 
                    reviews. It supports secure payments, delivery services, 
                    and includes a seller portal, creating a dynamic marketplace 
                    for both buyers and sellers.
                </p>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    loadProducts();
});

function loadProducts() {
    fetch('/api/products')
        .then(response => response.json())
        .then(products => {
            const container = document.getElementById('product-container');
            container.innerHTML = ''; // Clear existing content
            
            products.forEach(product => {
                const productHTML = `
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <figure class="p-4">
                            <img src="/storage/photos/${product.foto}" class="w-full h-48 object-contain" alt="${product.nama_produk}">
                        </figure>
                        <div class="p-4">
                            <h3 class="text-xl font-semibold mb-2">${product.nama_produk}</h3>
                            <p class="text-gray-600 mb-4">
                                Warna: ${product.warna}<br>
                                Customer: ${product.pelanggan}
                            </p>
                            <div class="flex justify-between items-center">
                                <p class="text-xl font-bold">Rp ${product.harga.toLocaleString()}</p>
                                <button class="add-to-cart bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                `;
                container.innerHTML += productHTML;
            });
        })
        .catch(error => console.error('Error:', error));
}
</script>

   <!-- Quotes Section -->
<section class="bg-white to-transparent py-16 text-black">
    <div class="container mx-auto px-8">
        <div class="flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="md:w-2/3 space-y-6">
                <h2 class="text-3xl font-bold">Random Quotes</h2>
                <p class="text-2xl italic leading-relaxed" id="quote">A good pair of shoes can take you great places.</p>
                <p class="text-lg rainbow-text" id="author">— Audrey Hepburn</p>
            </div>
            <div class="md:w-1/3 flex justify-center items-center mt-8 md:mt-0">
                <img src="/images/IconWeb_MM 1.png" alt="Shoes" class="w-32 transition-transform duration-300 hover:scale-110">
            </div>
        </div>
    </div>
</section>

<style>
    .rainbow-text {
        background: linear-gradient(
            to right,
            #ff0000,
            #ff7f00,
            #ffff00,
            #00ff00,
            #0000ff,
            #4b0082,
            #8b00ff
        );
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        background-size: 200% auto;
        animation: rainbow 6s linear infinite;
    }

    @keyframes rainbow {
        0% {
            background-position: 0% center;
        }
        100% {
            background-position: 200% center;
        }
    }
</style>

    <!-- Footer Section -->
    <footer class="bg-black text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Find Us Here</h3>
                    <p class="mb-4">More comfortable steps, more style with Motion Max!</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-2xl hover:text-black"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-2xl hover:text-black"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-2xl hover:text-black"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <div class="flex flex-col space-y-2">
                        <a href="#" class="hover:text-gray">privacy policy</a>
                        <a href="#" class="hover:text-gray">return & exchanges</a>
                        <a href="#" class="hover:text-gray">shipping information</a>
                        <a href="#" class="hover:text-gray">customer reviews</a>
                    </div>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4">Contact Us</h3>
                    <div class="flex flex-col space-y-2">
                        <a href="#" class="hover:text-gray">+62 877-7724-8491</a>
                        <a href="#" class="hover:text-gray">+62 812-2610-9947</a>
                        <a href="#" class="hover:text-gray">+62 815-7515-0958</a>
                        <a href="#" class="hover:text-gray">info@motionmax.com</a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-8 pt-8 border-t border-gray-700">
                Design and Developed by MotionMax | All Rights Reserved!
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/js/script.js"></script>
</body>
</html>