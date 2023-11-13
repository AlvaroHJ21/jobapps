 {{-- Platform modal --}}
 <dialog id="platform_modal" class="modal">
     <div class="modal-box">
         <form method="dialog">
             <button class="absolute btn btn-sm btn-circle btn-ghost right-2 top-2">✕</button>
         </form>

         <h3 class="text-lg font-bold">Registrar plataforma</h3>
         <form action={{ route('platforms.store') }} method="POST" class="max-w-lg m-auto mt-8">
             @csrf
             <div class="mb-3">
                 <label for="" class="label">Nombre</label>
                 <input id="name" type="text" name="name" class="w-full input input-bordered" placeholder="">
             </div>
             <div class="mb-3">
                 <label for="" class="label">URL</label>
                 <input id="url" type="text" name="url" class="w-full input input-bordered" placeholder="">
             </div>
             <div class="mb-3">
                 <label for="" class="label">Usuario</label>
                 <input id="user" type="text" name="user" class="w-full input input-bordered" placeholder="">
             </div>
             <button class="btn btn-primary">Guardar</button>
         </form>

     </div>
 </dialog>
