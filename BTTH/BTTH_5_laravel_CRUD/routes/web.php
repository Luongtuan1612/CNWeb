<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IssueController;

// Đường dẫn hiển thị danh sách vấn đề (trang chủ, có phân trang)
Route::get('/', [IssueController::class, 'index'])->name('issues.index');

// Đường dẫn để hiển thị form tạo vấn đề mới
Route::get('/issues/create', [IssueController::class, 'create'])->name('issues.create');

// Đường dẫn để lưu thông tin vấn đề mới vào cơ sở dữ liệu
Route::post('/issues', [IssueController::class, 'store'])->name('issues.store');

// Đường dẫn để hiển thị form chỉnh sửa thông tin một vấn đề
Route::get('/issues/{id}/edit', [IssueController::class, 'edit'])->name('issues.edit');

// Đường dẫn để cập nhật thông tin một vấn đề sau khi chỉnh sửa
Route::put('/issues/{id}', [IssueController::class, 'update'])->name('issues.update');

// Đường dẫn để xóa một vấn đề (thực hiện xóa sau khi xác nhận trong modal)
Route::delete('/issues/{id}', [IssueController::class, 'destroy'])->name('issues.destroy');

