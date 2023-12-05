<?php

namespace App\Controllers;

use App\Models\BookModel;
use App\Controllers\BaseController;

class BookController extends BaseController
{
    public function index()
    {
        return view('books/index');
    }

    public function createBook()
    {
        return view('books/add');
    }

    public function bookList()
    {

        $mdlBook = new BookModel();

        $data['books'] = $mdlBook->findAll();

        return view('books/list', $data);
    }

    public function storeBook()
    {
        //insertion of data in database        
        $mdlBook = new BookModel();
        $dataPost = [
            'title' => $this->request->getPost('txtTitle'),
            'author' => $this->request->getPost('txtAuthor'),
            'year' => $this->request->getPost('txtYear'),
        ];
        // dd($dataPost);
        $mdlBook->insert($dataPost);
        return redirect()->to('/books/list')->with('success','Book Successfully Added.');
    }

    public function bookView($id)
    {
        $mdlBook = new BookModel();
        $data['books'] = $mdlBook->find($id);
        return view('books/edit', $data);
    }

    public function bookUpdate($id)
    {
        $mdlBook = new BookModel();
        $dataPost = [
            'title' => $this->request->getPost('txtTitle'),
            'author' => $this->request->getPost('txtAuthor'),
            'year' => $this->request->getPost('txtYear'),
        ];
        $mdlBook->update($id, $dataPost);
        return redirect()->to('/books/list')->with('success-updated','Book Successfully Updated.');
    }

    public function bookDelete($id)
    {
        $mdlBook = new BookModel();
        $mdlBook->delete($id);
        return redirect()->to('books/list')->with('success-deleted','Book Successfully Delete.');
    }
}
