<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
<div class="ml-5 row-hl d-flex flex-row justify-content-around ">
        <div >  <a class="text-dark" href="/"><h4>Home</h4></a> </div> 
        <div> <h4>Category</h4> </div>
        <div>  <a class="text-dark" href="/contact"><h4>Contact</h4></a> </div>
    </div>

    <div style="height: 300px;" class="bg-info  pt-5 pb-5 d-flex justify-content-center align-items-center">
        <div class="text-white"><h2>Happy Book Store</h2></div>

    </div>


    <div class="row-hl d-flex flex-row  m-3">

        
        <div class="container card">
           <div class="d-flex justify-content-center align-items-center text-primary p-2"><h2>Contact</h2></div> 
            

                <h2>Store Address : </h2>
                <p>JL. JayaBaru kec.Musi Banyuasin,  Sumatera Selatan, Indonesia</p>

                <h2>Open Daily : </h2>
                <p>Senin - Kamis : 8.00 - 14.00</p>
                <p>Jumat - Minggu : 13.00 - 15.00</p>

                <h2>Contact : </h2>
                <p>Phone: 082179464918</p>
                <p>Email: muhammad.elfandiansyah@gmail.com</p>
        </div>

        
        <div class="container w-25">
            <div class="bg-primary d-flex justify-content-center align-items-center text-white">
                <h2>Category</h2>
            </div>


            <div>
                @foreach($categories as $cg)
                <div class="row-hl d-flex flex-row"> 
                    <div>
                        <a href="/category/ {{$cg->id}} "> {{$cg->category}} </a> 
                    </div>

                </div>
    
                @endforeach
            </div>


        </div>
    </div>
    
</body>
</html>