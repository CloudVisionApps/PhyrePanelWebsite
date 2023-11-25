<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="antialiased">
       <div class="text-center mt-12">
            <h1 class="text-3xl">PhyrePanel</h1>
            <h2 class="text-2xl">Open source web hosting control panel.</h2>
            <p>
                Control your websteis easily with PhyrePanel.
            </p>
           <div class="mt-12 m-auto w-[40rem]">
               To see how it works, just install it!
               <br />
               <div class="rounded bg-green-100 text-green-500 p-2">
                   wget https://raw.githubusercontent.com/CloudVisionApps/PhyrePanel/main/installers/install.sh && chmod +x install.sh && ./install.sh
               </div>
           </div>
       </div>
    </body>
</html>
