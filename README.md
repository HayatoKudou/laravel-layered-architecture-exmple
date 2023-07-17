# 書籍管理システム LibraSys

## 概要

## 開発環境
- php 8.2
- Laravel 10

## 必要なもの

-   Docker (Mac環境を想定)

## 環境構築

Dockerセットアップ + Laravel セットアップ

```bash
make setup
```

## 動作確認

### GET /api/books

```bash
curl -X GET "http://127.0.0.1:8000/api/books" \
     -H "Content-Type: application/json" \
     -H "X-Requested-With: XMLHttpRequest" \
     -d '{"bookId": "1"}'
```

### POST /api/book

```bash
curl -X POST "http://127.0.0.1:8000/api/book" \
     -H "Content-Type: application/json" \
     -H "X-Requested-With: XMLHttpRequest" \
     -d '{"title": "本のタイトル", "description": "本の説明"}'
```
