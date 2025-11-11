<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre"
        value="{{ old('nombre', $producto->nombre ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="precio" class="form-label">Precio</label>
    <input type="number" step="0.01" class="form-control" id="precio" name="precio"
        value="{{ old('precio', $producto->precio ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="stock" class="form-label">Stock</label>
    <input type="number" class="form-control" id="stock" name="stock"
        value="{{ old('stock', $producto->stock ?? 0) }}" required>
</div>

<div class="mb-3">
    <label for="description" class="form-label">Descripción</label>
    <textarea class="form-control" id="description" name="description">{{ old('description', $producto->description ?? '') }}</textarea>
</div>


<div class="mb-3">
    <label for="categoria_id" class="form-label">Categoría</label>
    <select name="categoria_id" id="categoria_id" class="form-control" required>
        <option value="">-- Seleccionar --</option>
        @foreach($categorias as $cat)
            <option value="{{ $cat->id }}" {{ (old('categoria_id', $producto->categoria_id ?? '') == $cat->id) ? 'selected' : '' }}>{{ $cat->nombre }}</option>
        @endforeach
    </select>
</div>


