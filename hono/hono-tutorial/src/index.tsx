import { Hono } from "hono";
import { renderer } from "./renderer";

const app = new Hono();

app.use(renderer);

app.get("/", (c) => {
  return c.render(<h1>Hello!</h1>);
});

app.get("/hello", (c) => {
  return c.json({
    name: "John Doe",
    age: 25,
    message: "Hello, World!",
  });
});

export default app;
