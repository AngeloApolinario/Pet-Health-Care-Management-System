<x-app-layout>
    <div class="container">
        <h2>Add New Pet</h2>
        
        <form action="{{ route('pets.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Pet Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="breed" class="form-label">Breed</label>
                <input type="text" name="breed" class="form-control">
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" name="age" class="form-control">
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" class="form-control" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Add Pet</button>
        </form>
    </div>
</x-app-layout>
