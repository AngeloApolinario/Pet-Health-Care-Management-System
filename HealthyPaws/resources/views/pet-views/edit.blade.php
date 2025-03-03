<x-app-layout>
    <div class="container">
        <h2>Edit Pet</h2>

        <form action="{{ route('pets.update', $pet->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Pet Name</label>
                <input type="text" name="name" class="form-control" value="{{ $pet->name }}" required>
            </div>

            <div class="mb-3">
                <label for="breed" class="form-label">Breed</label>
                <input type="text" name="breed" class="form-control" value="{{ $pet->breed }}">
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" name="age" class="form-control" value="{{ $pet->age }}">
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" class="form-control" required>
                    <option value="Male" {{ $pet->gender == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ $pet->gender == 'Female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Update Pet</button>
        </form>
    </div>
</x-app-layout>
