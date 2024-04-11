FROM ubuntu:22.04

SHELL ["/bin/bash", "-c"]

ENV DEBIAN_FRONTEND=noninteractive \
    PYTHONIOENCODING=utf8 \
    LC_ALL=C.UTF-8 \
    LANG=C.UTF-8

# install proper tools
RUN apt-get update && \
    apt-get install -y vim tmux nano htop autoconf automake build-essential libtool cmake git sudo software-properties-common gperf libselinux1-dev  bison texinfo flex zlib1g-dev libexpat1-dev libmpg123-dev wget curl python3-pip unzip pkg-config clang llvm-dev apt-transport-https ca-certificates libc++-dev zip tree re2c bison libtool llvm-12 llvm-12-dev clang-12 gcc-11-plugin-dev

RUN apt-get install -y git build-essential wget zlib1g-dev golang-go python-pip python3-dev build-essential cmake

# lava
RUN apt install -y libglib2.0-dev gtk-doc-tools libtiff-dev libpng-dev \
  nasm tcl-dev libacl1-dev libgmp-dev libcap-dev

# fuzzer-test-suite
RUN apt install -y golang libarchive-dev libpng-dev ragel gtk-doc-tools libfreetype6-dev libglib2.0-dev libcairo2-dev \
  binutils-dev libgcrypt20-dev libdbus-glib-1-dev libgirepository1.0-dev libgss-dev bzip2 libbz2-dev libc-ares-dev libfreetype6-dev libglib2.0-dev \
  libssh-dev libssl-dev libxml2-dev libturbojpeg nasm liblzma-dev subversion

RUN apt-get install -y zip autoconf automake libtool bison re2c pkg-config flex bison libdbus-c++-dev


# New benchmark
## file
RUN apt install -y make autoconf automake libtool shtool

# Fuzzbench
RUN apt install -y ninja-build wget cmake clang llvm llvm-dev lld-12 clangd lldb-12

#RUN echo "deb https://apt.llvm.org/bionic/ llvm-toolchain-bionic-17 main" >> /etc/apt/sources.list && \
#  echo "deb-src https://apt.llvm.org/bionic/ llvm-toolchain-bionic-17 main" >> /etc/apt/sources.list && \
#  apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 15CF4D18AF4F7421

#RUN  apt update && \
#    apt-get install -y libclang-common-17-dev clang-17 llvm-17-dev lld-17 lld-17 clangd-17 lldb-17 libc++1-17 libc++-17-dev libc++abi-17-dev && \
RUN  update-alternatives --install /usr/bin/clang clang /usr/bin/clang-12 100 && \
   update-alternatives --install /usr/bin/clang++ clang++ /usr/bin/clang++-12 100 && \
   update-alternatives --install /usr/bin/llvm-config llvm-config /usr/bin/llvm-config-12 100 && \
   update-alternatives --install /usr/bin/lldb lldb /usr/bin/lldb-12 100

# # RUN mkdir /llvm && \
# #   cd /llvm && \
# #   wget http://releases.llvm.org/9.0.0/llvm-9.0.0.src.tar.xz -O llvm.tar.xz && tar xf llvm.tar.xz && \
# #   wget http://releases.llvm.org/9.0.0/compiler-rt-9.0.0.src.tar.xz -O compiler-rt.tar.xz && tar xf compiler-rt.tar.xz

#RUN mkdir /llvm && \
#    cd /llvm && \
#    wget https://github.com/llvm/llvm-project/releases/download/llvmorg-17.0.6/llvm-17.0.6.src.tar.xz -O llvm.tar.xz && tar xf llvm.tar.xz && \
#    wget https://github.com/llvm/llvm-project/releases/download/llvmorg-17.0.6/compiler-rt-17.0.6.src.tar.xz -O compiler-rt.tar.xz && tar xf compiler-rt.tar.xz

RUN mkdir -p /fuzzer
