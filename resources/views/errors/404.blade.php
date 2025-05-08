<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>404</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Garamond:wght@400&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap');

            body {
                font-family: 'Garamond', serif;
                background-color: #fff1ea;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;  
                display: flex;
            }

            h1 {
                font-size: 60px;
                font-weight: 700;
            }

            h2 {
                font-size: 20px;
                font-weight: 600;0
            }

            h1, h2 {
                font-family: 'Inter', sans-serif;
                color: #4D4242;
                text-align: center;
                margin: 0;
            }

            a {
                font-family: 'Inter', sans-serif;
                background: linear-gradient(to right, #4D4242, #4D4242);
                color: white;
                margin-top: 50px;
                text-align: center;
                display: inline-block;
                font-weight: bold;
                font-size: 1.15rem;
                padding: 0.75rem 2rem;
                border-radius: 0.75rem;
                transition: all 0.3s ease;
                text-decoration: none;
                margin-left: 230px;
            }   

            img {
                margin-left: 130px;
                width: 300px;
                margin-top: 23px;
            }

            @media screen and (max-width: 768px) { 
                body {
                    flex-direction: column;
                    align-items: center;
                }

                img {
                    width: 200px;
                    margin-left: 25%;
                }

                a {
                    margin-left: 38%;
                }
            }
            
        </style>
    </head>

    <body>
        <div class="bg-[#fff1ea] h-screen flex flex-col items-center justify-center">
            <div>
                <h1 class="text-[#4D4242] font-[1000] text-6xl text-center mb-5"> 404 </h1>
            </div>

            <div>
                <img src="/images/scissors.png" alt="Image 404"
                    class="w-72 h-auto max-h-96 object-cover transform transition-all duration-300 hover:scale-105 hover:rotate-2 object-fill justify-self-center " />
            </div>

            <div>
                <h2 class="text-[#4D4242] font-[1000] text-xl text-center mt-8"> Ho sentim. Però no s'ha trobat la pàgina que heu sol·licitat. </h2>
            </div>

            <div class="mt-10 flex justify-center button">
                <a href='/'
                    class='bg-[#4D4242] from-amber-700 to-amber-900 text-white font-bold text-xl py-3 px-8 rounded-xl transition duration-300 transform hover:scale-105 hover:shadow-xl shadow-lg font-garamond w-full md:w-auto md:max-w-md text-center'>
                    Inici
                </a>
            </div>
        </div>
    </body>
</html>