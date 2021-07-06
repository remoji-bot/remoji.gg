/*
  Remoji - Discord emoji manager bot
  Copyright (C) 2021 Shino <shinotheshino@gmail.com>.

  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU Affero General Public License as published
  by the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU Affero General Public License for more details.

  You should have received a copy of the GNU Affero General Public License
  along with this program.  If not, see <https://www.gnu.org/licenses/>.
*/

import * as express from "express";
import * as path from "path";
import { Logger, getenv } from "@remoji-bot/core";

const app = express();

app.use(express.static(path.join(__dirname, "..", "static")));
app.set("views", path.join(__dirname, "views"));
app.set("view engine", "ejs");

app.get("*", (req, res) => res.render(req.path));

const port = getenv("PORT", true, false) ?? 8080;

app.listen(port, () => Logger.getDefault().info(`Server listening on port ${port}`));
