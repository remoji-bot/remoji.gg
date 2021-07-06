FROM node:14-alpine
RUN apk add git

WORKDIR /srv/web

COPY package.json yarn.lock ./
COPY .git ./.git
RUN yarn --frozen-lockfile
COPY . .

CMD ["yarn", "start"]
