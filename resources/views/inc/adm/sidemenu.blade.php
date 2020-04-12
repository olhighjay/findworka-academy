<style>
    .heading{
        padding-left: 40px;
        font-weight: bold;
       
    }
</style>

    <div class="card">
    
        <span class="card-header">Menu</span>
        <div style="padding-top:10px;">
            
            <span class="heading"> User Management</span>
                <ul>
                    <li><a href="{{url('/admin/admins')}}"> View Admins </a></li>
                    <li><a href="{{url('/admin/tutors')}}"> View Tutors </a></li>
                    <li><a href="{{url('/admin/students')}}"> View Students </a></li>
                    <li><a href="{{url('/admin/admins/create')}}"> Create Admins </a></li>
                    <li><a href="{{url('/admin/tutors/create')}}"> Create Tutors </a></li>
                </ul>

            <span class="heading"> Programs Management</span> 
                <ul>
                    <li><a href="{{url('/admin/programs')}}"> View Programs </a></li>
                    <li><a href="{{url('/admin/programs/create')}}"> Create Programs </a></li>
                </ul>

            <span class="heading"> Courses Management </span> 
                <ul>
                    <li><a href="{{url('/admin/courses')}}"> View Courses </a></li>
                    <li><a href="{{url('/admin/courses/create')}}"> Create Courses </a></li>
                </ul>   

            <span class="heading"> Students Management</span> 
                <ul>
                    <li><a href="{{url('/admin/students')}}"> View Students </a></li>
                    <li><a href="{{url('/admin/stu-programs')}}"> View Students based on Program </a></li>
                    <li><a href="{{url('/admin/stu-courses')}}"> View Students based on Course </a></li>
                </ul>

            <span class="heading"> Payments Management</span> 
            <ul>
                <li><a href="{{url('/admin/payments')}}"> View Payments </a></li>
                <li><a href="{{url('/admin/make-payment')}}"> Make Payments</a></li>
            </ul>    

            <span class="heading"> Assignment </span>
                <ul>
                    <li><a href="{{url('admin/ass-course')}}"> Assignments </a></li>
                </ul>


        </div>
    </div>
    