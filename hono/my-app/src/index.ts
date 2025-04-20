import { Hono } from "hono";

const app = new Hono();

app.get("/", (c) => {
  return c.text("Hello Hono!");
});

app.get("/api/hello", (c) => {
  return c.json({
    ok: true,
    message: "Hello Hono!",
  });
});

app.get("/posts/:id", (c) => {
  // クエリパラメーターpageを取得
  const page = c.req.query("page");

  // パスパラメーターidを取得
  const id = c.req.param("id");

  // ヘッダーを設定
  c.header("X-Message", "Hi!");

  return c.text(`You want see ${page} of ${id}`);
});

export default app;
