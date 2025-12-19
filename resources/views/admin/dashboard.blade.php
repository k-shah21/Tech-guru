 <style>
   @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200..800&display=swap');

   body {
     background: #f5f7fa;
     font-family: 'Plus Jakarta Sans', sans-serif;
   }

   .page-wrap {
     padding: 30px;
     max-width: 1300px;
     margin: 0 auto;
   }

   .card-rounded {
     border-radius: 18px;
   }

   .shadow-soft {
     box-shadow: 0 8px 40px rgba(0, 0, 0, 0.06);
   }

   .stats-card {
     color: black;
   }

   .icon-box {
     width: 58px;
     height: 58px;
     border-radius: 50%;
     background: rgba(255, 255, 255, 0.14);
     display: flex;
     align-items: center;
     justify-content: center;
   }

   .search-input {
     width: 260px;
     border-radius: 8px;
     border: 1px solid grey;
     padding: 8px;
   }

   .search-btn {
     background: #D1A132;
     border: none;
     width: 120px;
     border-top-right-radius: 10px;
     border-bottom-right-radius: 10px;
   }

   .avatar-circle {
     width: 46px;
     height: 46px;
     border-radius: 50%;
     background: #0d6efd;
     color: white;
     font-weight: bold;
     display: flex;
     align-items: center;
     justify-content: center;
   }

   .tab {
     padding-bottom: 10px;
     text-underline-offset: 6px;
   }

   .tab-parent {
     gap: 30px;
     cursor: pointer;
     display: flex;
     justify-content: space-between;
     align-items: center;
   }

   .tab.active {
     text-decoration: underline;
     text-underline-offset: 6px;
   }

   .tab-content {
     display: none;
     margin-top: 20px;
   }

   .tab-content.active {
     display: block;
     text-decoration: underline;
   }

   .action-buttons button {
     border: none;
     padding: 6px 10px;
     border-radius: 5px;
     cursor: pointer;
     font-size: 16px;
     display: flex;
     align-items: center;
     justify-content: center;
     transition: background-color 0.2s, color 0.2s;
   }

   .action-buttons button.edit {
     background-color: #4caf50;
     color: white;
   }

   .action-buttons button.edit:hover {
     background-color: #45a049;
   }

   .action-buttons button.delete {
     background-color: #f44336;
     color: white;
   }

   .action-buttons button.delete:hover {
     background-color: #da190b;
   }

   .action-buttons i {
     font-size: 18px;
   }
 </style>

 <x-layouts.adminlayout>

   <div class="page-wrap">

     <!-- Header -->
     <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap">
       <div>
         <h1 class="h3 mb-0 fw-bold">Dashboard</h1>
         <small class="text-muted">Overview & bookings</small>
       </div>

       <div class="d-flex align-items-center gap-3 mt-3 mt-md-0">
         <div class="text-end">
           @auth



           <div class="small text-muted">Welcome, <strong>{{ auth()->user()->name }}</strong></div>
           <li>
             <i class="fa-solid fa-door-closed"></i>
             <form class="inline" method="POST" action="/logout">
               @csrf
               <button type="submit">
                 Logout
               </button>
             </form>
           </li>

           @else

           @endauth

         </div>
         <button class="btn-light p-2">
           <i class="bi bi-bell"></i>
         </button>
       </div>
     </div>

     <!-- Stats -->
     <div class="row g-4 mb-4">
       <div class="col-md-6">
         <div class="card card-rounded shadow-soft stats-card p-4">
           <h5>Total Bookings</h5>
           <div class="display-6 fw-bold text-success">{{ $contacts->count() }}</div>
         </div>
       </div>

       <div class="col-md-6">
         <div class="card card-rounded shadow-soft stats-card p-4">
           <h5>Total Users</h5>
           <div class="display-6 fw-bold text-info">{{ $newsLetters->count() }}</div>
         </div>
       </div>
     </div>


     <!-- Table -->
     <div class="card card-rounded shadow-soft">

       <div class="card-body p-4">

         <div class="d-flex justify-content-between mb-3 flex-wrap">
           <div class="fw-bold tab-parent">
             <p class="tab active" data-tab="contact">Contact Details</p>
             <p class="tab" data-tab="newsletter">News Letters</p>
           </div>
         </div>

         <div class="table-responsive tab-content active" id="contact">
           <table class="table table-hover align-middle">
             <thead>
               <tr>
                 <th>#</th>
                 <th>Name</th>
                 <th>Email</th>
                 <th>Phone</th>
                 <th>Subject</th>
                 <th>Action</th>
               </tr>
             </thead>

             <tbody>
               @forelse($contacts as $contact)
               <tr>
                 <td>{{ $loop->iteration }}</td>
                 <td class="fw-semibold">{{ $contact->full_name }}</td>
                 <td>{{ $contact->email }}</td>
                 <td>{{ $contact->phone }}</td>
                 <td>{{ $contact->subject }}</td>
                 <td>
                   <form action="{{ route('contacts.delete', $contact->id) }}" method="POST">
                     @csrf
                     @method('DELETE')
                     <div class="action-buttons">
                       <button type="submit" class="delete">
                         <i class="ri-delete-bin-line"></i>
                       </button>
                     </div>
                   </form>
                 </td>
               </tr>
               @empty
               <tr>
                 <td colspan="6" class="text-center">
                   No contacts found.
                 </td>
               </tr>
               @endforelse
             </tbody>
           </table>
         </div>

         <!-- Newsletter Table -->
         <div class="tab-content" id="newsletter">
           <table class="table">
             <thead>
               <tr>
                 <th>#</th>
                 <th>Email</th>
                 <th>Duplicate Email</th>
                 <th>Action</th>
               </tr>
             </thead>

             <tbody>
               @forelse ($newsLetters as $newsLetter)
               <tr>
                 <td>{{ $loop->iteration }}</td>

                 <td>
                   <div class="fw-semibold">{{ $newsLetter->email }}</div>
                 </td>

                 <td>{{ $newsLetter->email }}</td>

                 <td class="action">
                   <form action="{{ route('newsletter.delete', $newsLetter->id) }}" method="POST">
                     @csrf
                     @method('DELETE')
                     <div class="action-buttons">
                       <button type="submit" class="delete">
                         <i class="ri-delete-bin-line"></i>
                       </button>
                     </div>
                   </form>
                 </td>
               </tr>
               @empty
               <tr>
                 <td colspan="4" class="text-center">
                   No newsletter subscribers found.
                 </td>
               </tr>
               @endforelse
             </tbody>
           </table>
         </div>

       </div>
     </div>

   </div>



   <script>
     const tabs = document.querySelectorAll(".tab");
     const contents = document.querySelectorAll(".tab-content");

     tabs.forEach(tab => {
       tab.addEventListener("click", () => {
         tabs.forEach(t => t.classList.remove("active"));
         contents.forEach(c => c.classList.remove("active"));

         tab.classList.add("active");
         document.getElementById(tab.dataset.tab).classList.add("active");
       });
     });
   </script>


 </x-layouts.adminlayout>